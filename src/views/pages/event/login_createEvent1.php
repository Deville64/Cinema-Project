<?php get_header('login'); ?>

<main id="CreateEvent1">
    <h1>Emplacement</h1>

    <svg id="Progress_Bar" data-name="Progress Bar" xmlns="http://www.w3.org/2000/svg" width="357" height="50" viewBox="0 0 357 50">
        <g id="Progress_3" data-name="Progress 3" transform="translate(201 21)" fill="#fff" stroke="#000" stroke-width="1">
            <rect width="110" height="9" stroke="none" />
            <rect x="0.5" y="0.5" width="109" height="8" fill="none" />
        </g>
        <g id="Progress_2" data-name="Progress 2" transform="translate(48 21)" fill="#fff" stroke="#000" stroke-width="1">
            <rect width="110" height="9" stroke="none" />
            <rect x="0.5" y="0.5" width="109" height="8" fill="none" />
        </g>
        <g id="Step_1" data-name="Step 1">
            <g id="Circle_1" data-name="Circle 1" fill="#fff" stroke="#000" stroke-width="1">
                <circle cx="25" cy="25" r="25" stroke="none" />
                <circle cx="25" cy="25" r="24.5" fill="none" />
            </g>
            <text id="Text_1" data-name="Text 1" transform="translate(22 10)" font-size="20" font-family="SegoeUI, Segoe UI">
                <tspan x="-2.391" y="22">1</tspan>
            </text>
        </g>
        <g id="Step_2" data-name="Step 2" transform="translate(153)">
            <g id="Circle_2" data-name="Circle 2" fill="#fff" stroke="#000" stroke-width="1">
                <circle cx="25" cy="25" r="25" stroke="none" />
                <circle cx="25" cy="25" r="24.5" fill="none" />
            </g>
            <text id="Text_2" data-name="Text 2" transform="translate(22 11)" font-size="20" font-family="SegoeUI, Segoe UI">
                <tspan x="-2.391" y="22">2</tspan>
            </text>
        </g>
        <g id="Step_3" data-name="Step 3" transform="translate(307)">
            <g id="Circle_3" data-name="Circle 3" fill="#fff" stroke="#000" stroke-width="1">
                <circle cx="25" cy="25" r="25" stroke="none" />
                <circle cx="25" cy="25" r="24.5" fill="none" />
            </g>
            <text id="Text_3" data-name="Text 3" transform="translate(22 11)" font-size="20" font-family="SegoeUI, Segoe UI">
                <tspan x="-2.391" y="22">3</tspan>
            </text>
        </g>
    </svg>

    <p>
        Les gens verront cette section lorsque nous ferons la promotion de votre groupe, mais vous pourrez toujours y ajouter d'autres informations plus tard.
        Quel est l'objectif du groupe ?
        À qui s'adresse le groupe ?
        Que ferez-vous lors des événements ?
    </p>

    <form action="" method="post">
        <ul>
            <li>
                <h2>Film</h2>
            </li>

            <li>
                <label for="search">Recherche</label>
                <input type="text" onkeyup="searchMovieEvent(event)" class="searchBar" id="searchIDMovie" onclick="showHideDropDownEvent()" autocomplete="off" placeholder=" Rechercher un film, une série,...">
                <div id="dropDownEvent" class="dropdown-content"></div>
                <div id="movieData">
                    <input type="hidden" id="idMovie" name="idMovie" value="<?php echo $_SESSION['event1']['idMovie'] ?>">
                    <input type="hidden" id="movieTitle" name="movieTitle" value="<?php echo $_SESSION['event1']['movieTitle'] ?>">
                    <input type="hidden" id="moviePoster" name="moviePoster" value="<?php echo $_SESSION['event1']['moviePoster'] ?>">
                </div>
            </li>

            <li>
                Nombre de places proposées: <input type="number" name="participant" value="<?php echo $_SESSION['event1']['participant'] ?>">
                <!-- Pas de limite: <input type="checkbox"> -->
            </li>
        </ul>

        <textarea id="" cols="30" rows="10" name="description"><?php echo $_SESSION['event1']['description'] ?></textarea>
        
        <ul>
            <li><h2 id="movieTitleEvent"></h2></li>
            <li><img src="" alt="" id="moviePosterEvent"></li>
        </ul>
        <input type="submit" value="Continuer">
    </form>
</main>

<?php get_footer('login'); ?>