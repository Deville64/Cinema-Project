<?php get_header($state); ?>


<main id="critic" class="cat-menu">
    <?php get_menu('movie'); ?>


        <div id="recommend">
            <h2>Films Recommandés</h2>
            <ul>
                <li><a href=""><img src="./src/assets/image/exempleFilm/film.jpg" alt=""></a></li>
                <li><a href=""><img src="./src/assets/image/exempleFilm/film1.jpg" alt=""></a></li>
                <li><a href=""><img src="./src/assets/image/exempleFilm/film2.jpg" alt=""></a></li>
                <li><a href=""><img src="./src/assets/image/exempleFilm/film3.jpg" alt=""></a></li>
                <li><a href=""><img src="./src/assets/image/exempleFilm/film4.jpg" alt=""></a></li>
                <li><a href=""><img src="./src/assets/image/exempleFilm/film5.jpg" alt=""></a></li>

            </ul>
        </div>
</main>

<?php get_footer($state); ?>