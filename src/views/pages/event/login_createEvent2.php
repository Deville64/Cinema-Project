<?php get_header('login'); ?>

<form action="" method="post">

    <div class="movieP">
        <img src="" alt="" id="poster">
    </div>


    <div id="">
        <h2>Détails:</h2>
    </div>

    <div>
        <ul>
            <li><?php echo $_SESSION['event']['date'] ?> - <?php echo $_SESSION['event']['hour'] ?>h <?php echo $_SESSION['event']['minute'] ?></li>
            <li><?php echo $_SESSION['event1']['description'] ?></li>
        </ul>
    </div>

    <input type="submit" value="Continuer" name="button" onclick="clearSession()">
</form>

<div id="dropDownEvent" class="dropdown-content"></div>

<?php get_footer('login'); ?>