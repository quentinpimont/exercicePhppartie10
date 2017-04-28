        <?php
            $title = 'exercice 3';
            include ('../assets/header.php');
            $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
            $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
            $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
            $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
            // function qui sert à la création des portraît
            function createProfil($profil) {
        ?>
            <img src="<?php echo $profil['portrait'];?>" alt="<?php echo $profil['name'];?>"/>
            <p><?php echo $profil['name'] . ' ' . $profil['firstname'];?></p>
        <?php
            }
        ?>
            <h1>Exercice 3 partie 10</h1>
        <div>
            <?php
                // creer le portrait 1
                createProfil($portrait1);
                // creer le portrait 2
                createProfil($portrait2);
                // creer le portrait 3
                createProfil($portrait3);
                // creer le portrait 4
                createProfil($portrait4);
            ?>
        </div>
    </body>
</html>