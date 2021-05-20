<div id="menuMovie">
    <div id="descrMovie">
        <div class="wrapper">
            <ul id="description">
                <li><img src="" alt="">5/5 Chef d'oeuvre</li>
                <li><span id="runtime"></span> min | <span id="genres"></span> | <span id="origin"></span> </li>
            </ul>
            
            <ul id="title">
                <li>
                    <h1 id="original_title"></h1>
                </li>
                <li id="release_date"></li>
            </ul>

            <ul id="rate">
                <li>Donner une note :</li>
                <li></li>
            </ul>
        </div>
    </div>

    <div id="menu">
        <div class="wrapper">
            <ul>
                <li><a href="<?php echo $router->generate('movie'); ?>">
                        <span id="menu-home">Accueil</span>
                    </a>
                </li>
                <li><a href="<?php echo $router->generate('casting'); ?>">Casting</a> </li>
                <li><a href="<?php echo $router->generate('video'); ?>">Vidéo</a> </li>
                <li><a href="<?php echo $router->generate('picture'); ?>">Photo</a></li>
                <li><a href="<?php echo $router->generate('critic'); ?>">Critique</a></li>
            </ul>
        </div>
    </div>
</div>