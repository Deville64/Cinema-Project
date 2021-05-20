<?php get_header($state); ?>
<?php get_menu('event'); ?>

<main id="event">
    <img src="" alt="">
    <div id="description">
        <h2>Détails:</h2>
        <p></p>
    </div>

    <div id="Participant">
        <h2>Participant</h2>
        <ul>
            <li>
                <img src="./src/assets/image/exempleFilm/claudia.jpg" alt="">
                <p id="name">Claudia Cardinale</p>
            </li>
        </ul>
    </div>

    <div id="otherEvent">
        <h2>Evènement à proximité</h2>

        <article id="event">
            <p id="date">Lun. 14 Février, 21h15 - VF</p>
            <div id="place">
                <img src="./src/assets/image/place.png" alt="">
                <p>Bayonne</p>
            </div>
            <h2 id="title">Il était une fois dans l'ouest</h2>
            <a href="<?php echo $router->generate('movie'); ?>"><img src="./src/assets/image/exempleFilm/film.jpg" alt=""></a>
            <p id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate necessitatibus saepe, tempora dolor magnam a molestiae dicta beatae, reiciendis aspernatur quo laboriosam enim similique labore, hic ut eos laborum autem?</p>
            <div>
                <p id="participant">6 Participants</p>
                <a href="<?php echo $router->generate('event'); ?>" id="button">Participer</a>
            </div>
        </article>
    </div>
</main>


<aside>
    <ul id="host">
        <li>
            <img src="" alt="">
            <p id="name">Claudia Cardinale</p>
        </li>
        <li>
            <p id="rate">Note:</p>
        </li>
    </ul>

    <ul id="place">
        <li id="movie">
            <img src="" alt="">
            <p>à domicile en VF</p>
        </li>
        <li id="time">
            <img src="" alt="">
            <p>Lundi 14 Février à 21h00</p>
        </li>
        <li id="where">
            <img src="" alt="">
            <p>La cantina, Mosley - Tatooine</p>
        </li>
    </ul>
</aside>

<?php get_footer($state); ?>