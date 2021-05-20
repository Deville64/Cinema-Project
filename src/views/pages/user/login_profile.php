<?php get_header('login'); ?>

<main id="profile">
    <?php get_menu('profile'); ?>

    <?php foreach ($result as $value) { ?>
        <section id="personalInfo" class="hide" style="display: inline-block;">
            <h1><span>Information personnelles</span></h1>

            <form action="" method="post">
                <div>
                    <label for="gender">Sexe:</label>
                    <select name="gender">
                        <option <?php echo $noChoice ?>> Selectionner un sexe</option>
                        <option <?php echo $femme ?> value="Femme">Femme</option>
                        <option <?php echo $homme ?> value="Homme">Homme</option>
                    </select>
                </div>

                <div>
                    <label for="firstName">Prénom:</label>
                    <input type="text" name="firstName" placeholder="Entrez votre prénom" value="<?php echo $value['firstName']; ?>">
                </div>

                <div>
                    <label for="lastName">Nom:</label>
                    <input type="text" name="lastName" placeholder="Entrez votre nom" value="<?php echo $value['lastName']; ?>">
                </div>

                <div>
                    <label for="email">Nom:</label>
                    <input type="email" name="email" placeholder="Entrez votre email" value="<?php echo $value['email']; ?>">
                </div>

                <div>
                    <label for="phone">Téléphone:</label>
                    <input type="tel" name="phone" placeholder="Entrez votre numéro de téléphone" value="<?php echo $value['phone']; ?>">
                </div>

                <div>
                    <label for="birthday">Année de naissance:</label>
                    <input type="date" name="birthday" placeholder="" value="<?php echo $value['birthday']; ?>">
                </div>

                <div>
                    <label for="description">Description:</label>
                    <textarea type="text" name="description" placeholder="Ecrivez un cours descriptif sur vous même"><?php echo $value['description']; ?></textarea>
                </div>

                <div class="button">
                    <input type="submit" value="Enregistrer">
                </div>

            </form>
        </section>
    <?php } ?>

    <?php foreach ($result as $value) { ?>
        <section id="postAdress" class="hide">
            <h1><span>Adresse Postal</span></h1>

            <form action="" method="post">
                <div>
                    <label for="address">Adresse:</label>
                    <input type="text" name="address" placeholder="Ex: 12 rue des bois" value="<?php echo $value['address']; ?>">
                </div>

                <div>
                    <label for="postalCode">Code postal:</label>
                    <input type="number" name="postalCode" placeholder="" value="<?php echo $value['postalCode']; ?>">
                </div>

                <div>
                    <label for="city">Ville:</label>
                    <input type="text" name="city" placeholder="" value="<?php echo $value['city']; ?>">
                </div>

                <div>
                    <label for="country">Pays:</label>
                    <input type="text" name="country" placeholder="" value="<?php echo $value['country']; ?>">
                </div>

                <div class="button">
                    <input type="submit" value="Enregistrer">
                </div>
            </form>
        </section>
    <?php } ?>

    <section id="picture" class="hide">
        <h1><span>Photo</span></h1>

        <form action="" method="post">
            <div>
                <label for="address">Adresse:</label>
                <input type="text" name="address" placeholder="Ex: 12 rue des bois">
            </div>

            <div class="button">
                <input type="submit" value="Enregistrer">
            </div>
        </form>
    </section>
</main>

<script src="./src/js/showHide.js"></script>

<?php get_footer('login'); ?>