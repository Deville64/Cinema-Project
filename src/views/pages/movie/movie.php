<?php get_header($state); ?>


<main id="movie" class="cat-menu">
    <?php get_menu('movie'); ?>

    <div class="movieP">
        <img src="" alt="" id="poster">
        <iframe src="" id="trailer" allowfullscreen height="450px" width="57.5%"></iframe>
    </div>



    <div class="wrapper">
        <div id="info-movie">
            <h2>Synopsis</h2>
            <p id="overview"></p>

            <h2>Tête d'affiche</h2>

            <ul id="casting"></ul>
        </div>
</main>

<?php get_footer($state); ?>