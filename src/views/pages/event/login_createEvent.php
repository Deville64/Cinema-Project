<?php get_header('login'); ?>

<main id="createEvent">
    <div class="wrapper">
        <h1>Proposer une séance</h1>

        <form action="" method="POST">
            <ul>
                <li>Lieu</li>
                <li>
                   <div id="searchControl"></div>
                </li>
            </ul>

            <ul>
                <li>Date et horaire</li>
                <li>

                    <div id="date">
                        <label for="date">Date</label>
                        <input type="date" name="date" value="<?php echo $_SESSION['event']['date'] ?>">
                    </div>

                    <div id="hour">
                        <label for="hour">Heure</label>
                        <select name="hour" id="hour" autofocus>
                            <?php for ($nombre = 0; $nombre < 24; $nombre++) {
                                if ($nombre != $_SESSION['event']['hour']) {
                                    $select = '';
                                }
                                if ($nombre == $_SESSION['event']['hour']) {
                                    $select = 'selected';
                                }
                                if ($_SESSION['event']['hour'] == null && $nombre == 12) {
                                    $select = 'selected';
                                } ?>

                                <option <?php echo $select ?> value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    h

                    <div id="minute">
                        <label for="minute">Minute</label>
                        <select name="minute" id="minute">
                            <?php for ($nombre = 0; $nombre < 60; $nombre = $nombre + 10) {
                                if ($nombre != $_SESSION['event']['minute']) {
                                    $select = '';
                                }
                                if ($nombre == $_SESSION['event']['minute']) {
                                    $select = 'selected';
                                } ?>

                                <option <?php echo $select ?> value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </li>
            </ul>
            <input type="submit" value="Continuer" id="button">
        </form>

        <div id="mapid"></div>
    </div>
</main>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js" integrity="sha512-cMQ5e58BDuu1pr9BQ/eGRn6HaR6Olh0ofcHFWe5XesdCITVuSBiBZZbhCijBe5ya238f/zMMRYIMIIg1jxv4sQ==" crossorigin=""></script>
<script src="./src/js/geocoder.js"></script>
<script src="./src/js/leafletSearch.js"></script>
<script src="./src/js/map.js"></script>

<?php get_footer('login'); ?>