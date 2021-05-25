'use strict'

var APIkey = 'c2e81f65513022487da9064f2343b97a';

//When the user clicks on the button, 
//toggle between hiding and showing the dropdown content
function showHideDropDown() {
    document.getElementById("dropDown").classList.toggle("show");
}

//Same function as before but for the search list in Event
function showHideDropDownEvent() {
    document.getElementById("dropDownEvent").classList.toggle("show");
}

// Close the dropdown for search bar and search bar event if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.searchBar')) {
        var dropdown = document.getElementById("dropDown");
        var dropdownEvent = document.getElementById("dropDownEvent");
        dropdown.classList.remove("show");
        dropdownEvent.classList.remove("show");
        console.log('click outside');
    }
}

// To search movie in search bar and create dropdown with 4 movies max
function searchMovie() {
    var xhr = new XMLHttpRequest();     // Creating the XMLHttpRequest object
    var text = document.getElementById("search").value;     //Take text from search bar
    var url = 'https://api.themoviedb.org/3/search/movie?api_key=' + APIkey + '&query=' + text + '&language=fr-FR';   
    xhr.open('GET', url);       // Instantiating the request object
    xhr.onload = function () {
         // Check if the request was successful
        if (xhr.status === 200) {
            var movieDb = JSON.parse(xhr.responseText);
            var listElem = document.getElementById("dropDown");

            //Purge old results
            while (listElem.firstChild) {
                listElem.removeChild(listElem.firstChild)
            }

            for (let info = 0; info < 4; info++) {
                var movieTitle = movieDb.results[info].original_title;
                var posterURL = 'http://image.tmdb.org/t/p/w300';
                var poster = movieDb.results[info].poster_path;
                var date = movieDb.results[info].release_date;
                var movieID = movieDb.results[info].id;

                var node = document.createElement("div");
                node.movieID = movieID
                node.className = "resultMovieSearch";

                //When clicked, save ID and send to movie
                node.addEventListener("click", function (event) {
                    console.log(event.target.movieID);
                    sessionStorage.setItem("movieID", event.target.movieID); // keep movieID in memory to use it in movie page
                    location.assign('../cinebuds/movie');
                });

                var spanTitle = document.createElement("span");
                var titleNode = document.createTextNode(movieTitle);
                spanTitle.className = "title"; 
                spanTitle.appendChild(titleNode);

                var spanDate = document.createElement("span");
                var dateNode = document.createTextNode(date);
                spanDate.className = "date";
                spanDate.appendChild(dateNode);

                var img = document.createElement('img');
                img.movieID = movieID
                img.setAttribute('src', posterURL + poster);
                
                node.appendChild(img);
                node.appendChild(spanTitle);
                node.appendChild(spanDate);
                listElem.appendChild(node);
            }
        }
    }
    xhr.send(); // Sending the request to the server
}

//When you click in a movie in the dropdown from the search bar
//Use the movie ID in local Storage to show main info such as Poster, Trailer, Synopsis, casting in movie page
function showOverview() {
    var movieID = sessionStorage.getItem('movieID');  // get back MovieID from the movie search
    var xhr = new XMLHttpRequest();     // interact with server
    var url = 'https://api.themoviedb.org/3/movie/' + movieID + '?api_key=' + APIkey + '&language=fr-FR';      //url to go to JSON file
    xhr.open('GET', url);

    xhr.onload = function () {
        var movieDb = JSON.parse(xhr.responseText);
        console.log(movieDb);

        var movieTitle = movieDb.original_title;
        var date = movieDb.release_date;
        var runTime = movieDb.runtime;
        var overview = movieDb.overview;
        var poster = movieDb.poster_path;
        var posterURL = 'http://image.tmdb.org/t/p/w300';

        for (let info = 0; info < 1; info++) {
            document.getElementById("genres").innerText = movieDb.genres[info].name
            document.getElementById("origin").innerText = movieDb.production_countries[info].iso_3166_1;
        }

        document.getElementById("original_title").innerText = movieTitle;
        document.getElementById("release_date").innerText = date;
        document.getElementById("runtime").innerText = runTime;
        document.getElementById("overview").innerText = overview;
        document.getElementById("poster").src = posterURL + poster;
    }
    xhr.send(); //Sends request to server

    showVideo(1, movieID);
    showCasting(8, movieID);
}
showOverview()

//Show casting in movie page
//Linked with showOverview function
function showCasting(loop, movieID) {
    var xhr = new XMLHttpRequest();     // interact with server
    var url = 'https://api.themoviedb.org/3/movie/' + movieID + '/credits?api_key=' + APIkey + '&language=fr-FR';      //url to go to JSON file
    xhr.open('GET', url);

    xhr.onload = function () {
        var movieDb = JSON.parse(xhr.responseText);
        console.log(movieDb);
        var listElem = document.getElementById("casting");

        //Purger Casting
        while (listElem.firstChild) {
            listElem.removeChild(
                listElem.firstChild
            )
        }

        for (let info = 0; info < loop; info++) {

            var posterURL = 'http://image.tmdb.org/t/p/w300';
            var poster = movieDb.cast[info].profile_path;
            var actor = movieDb.cast[info].name;
            var character = movieDb.cast[info].character;

            var node = document.createElement("li");
            node.className = "resultCasting" + [info];

            var img = document.createElement('img');
            img.setAttribute('src', posterURL + poster);

            var spanActor = document.createElement("P");
            spanActor.className = "actor" + [info];
            spanActor.innerText = actor;

            var spanCharacter = document.createElement("P");
            spanCharacter.className = "character" + [info];
            spanCharacter.innerText = character;

            listElem.appendChild(node);
            node.appendChild(img);
            node.appendChild(spanActor);
            node.appendChild(spanCharacter);
        }
    }
    xhr.send(); //Sends request to server
}

//Show trailer in movie page
//Linked with showOverview function
function showVideo(loop, movieID) {
    var xhr = new XMLHttpRequest();     // interact with server
    var url = 'https://api.themoviedb.org/3/movie/' + movieID + '/videos?api_key=' + APIkey + '&language=fr-FR';      //url to go to JSON file
    xhr.open('GET', url);

    xhr.onload = function () {
        var movieDb = JSON.parse(xhr.responseText);
        console.log(movieDb);

        for (let info = 0; info < loop; info++) {
            var videoURL = 'https://www.youtube.com/embed/'
            var videoId = movieDb.results[info].key;
            document.getElementById("trailer").src = videoURL + videoId;
        }
    }
    xhr.send(); //Sends request to server
}

//Search bar for creating event 
//Keep Id movie in local storage and put it hidden in HTML to save it in data base
function searchMovieEvent(event) {
    event.preventDefault();

    var xhr = new XMLHttpRequest();     // interact with server
    var text = document.getElementById("searchIDMovie").value;     //Take text from search bar
    var url = 'https://api.themoviedb.org/3/search/movie?api_key=' + APIkey + '&query=' + text + '&language=fr-FR';      //url to go to JSON file
    xhr.open('GET', url);

    xhr.onload = function () {

        if (xhr.status === 200) {
            var movieDb = JSON.parse(xhr.responseText);
            console.log(movieDb);
            var listElem = document.getElementById("dropDownEvent");
            var idElem = document.getElementById("movieData");

            //Purger
            while (listElem.firstChild) {
                listElem.removeChild(
                    listElem.firstChild
                )
            }

            for (let info = 0; info < 4; info++) {

                var movieTitle = movieDb.results[info].original_title;
                var posterURL = 'http://image.tmdb.org/t/p/w300';
                var poster = movieDb.results[info].poster_path;
                var date = movieDb.results[info].release_date;
                var movieID = movieDb.results[info].id;

                var result = document.createElement("div");
                result.movieID = movieID;
                result.movieTitle = movieTitle;
                result.poster = poster;
                result.className = "resultMovieSearch";

                //If click on movie, create input with ID movie to send it later to php
                result.addEventListener("click", function (event) {
                    sessionStorage.setItem("movieIdEvent", event.target.movieID);

                    var idMovie = document.getElementById("idMovie");
                    idMovie.value = event.target.movieID;

                    var titleMovie = document.getElementById("movieTitle");
                    titleMovie.value = event.target.movieTitle;

                    var posterMovie = document.getElementById("moviePoster");
                    posterMovie.value = event.target.poster;

                    showOverviewEvent();
                });

                var spanTitle = document.createElement("span");
                spanTitle.className = "title";

                var spanDate = document.createElement("span");
                spanDate.className = "date";

                var img = document.createElement('img');
                img.movieID = movieID
                img.setAttribute('src', posterURL + poster);

                var titleNode = document.createTextNode(movieTitle);
                var dateNode = document.createTextNode(date);

                result.appendChild(img);
                result.appendChild(titleNode);
                result.appendChild(dateNode);
                listElem.appendChild(result);
            }
        } else {
            alert('Request failed.  Returned status of ' + xhr.status);
        }
    }
    xhr.send(); //Sends request to server
}

//Show movie title ans poster when you create event page
function showOverviewEvent() {
    var movieID = sessionStorage.getItem('movieIdEvent');  // get back MovieID from the movie search
    var xhr = new XMLHttpRequest();     // interact with server
    var url = 'https://api.themoviedb.org/3/movie/' + movieID + '?api_key=' + APIkey + '&language=fr-FR';      //url to go to JSON file
    xhr.open('GET', url);

    xhr.onload = function () {
        var movieDb = JSON.parse(xhr.responseText);
        console.log(movieDb);

        var movieTitle = movieDb.original_title;
        var poster = movieDb.poster_path;
        var posterURL = 'http://image.tmdb.org/t/p/w300';

        document.getElementById("movieTitleEvent").innerText = movieTitle;
        document.getElementById("moviePosterEvent").src = posterURL + poster;
    }
    xhr.send(); //Sends request to server
}
showOverviewEvent();

function clearSession() {
    sessionStorage.removeItem('movieIdEvent');
}