<?php get_header($state); ?>

<main id="home" class="wrapper">

    <div id="banner">
        <button onclick="slide()" id=previous-btn>
            <</button> <button onclick="backSlide()" id=next-btn>>
        </button>
        <img id="home-banner">
    </div>

    <h1>Evènements à proximités</h1>

    <div id="event">
        <?php foreach (getEvent() as $value) { ?>
            <article>
                <p id="date"><?php echo dateFormat($value['date']) . ', à ' . $value['hour'] . 'H ' . $value['minute'] ?></p>

                <div id="place">
                    <img src="./src/assets/image/place.png" alt="" id="logoWhere">
                    <p id="address"><?php echo $value['address'] ?></p>
                </div>

                <h2 id="title"><?php echo $value['movieTitle'] ?></h2>

                <div>
                    <a href="<?php echo $router->generate('movie'); ?>"><img src="http://image.tmdb.org/t/p/w300<?php echo $value['moviePoster'] ?>" id="poster" alt=""></a>
                    <p id="description"><?php echo $value['description'] ?></p>
                </div>
                
                <div>
                    <p id="participant"><?php echo $value['participant'] . ' Participants' ?></p>
                    <a href="<?php echo $router->generate('event'); ?>" id="button">Participer</a>
                </div>
            </article>
        <?php }; ?>
    </div>
</main>

<script src="./src/js/slideShow.js"></script>

<?php get_footer($state); ?>