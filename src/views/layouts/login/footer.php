<script src="./src/js/movie.js"></script>

<footer id="footer">
    <div class="wrapper">
        <nav>
            <ul>
                <li><a href="<?php echo $router->generate('about'); ?>">A Propos</a></li>
                <li><a href="<?php echo $router->generate('contact'); ?>">Contact</a></li>
                <li><a href="<?php echo $router->generate('condition'); ?>">Conditions d'utilisation</a></li>
            </ul>
        </nav>

        <p id="right">© 2021 CinéBud's</p>
    </div>
</footer>
</body>
</html>