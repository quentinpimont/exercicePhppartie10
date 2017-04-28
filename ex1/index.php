        <?php
            $title = 'exercice 1';
            include ('../assets/header.php');
        ?>
        <h1>exercice 1</h1>
        <?php
            // on prepare toutes les regexp pour le formulaire
            $regexpName = '/[a-zA-Z]+-?[a-zA-Z]/';
            $regexpDate = '/[1-31]{1}\/{1}[1-12]{1}\/{1}[1990-2017]{1}/';
            $regexpLetter = '/\D/';
            $regexpAddress = '/[0-9]{1,4}\w/';
            $regexpMail = '/[a-zA-Z0-9-_.]+@{1}[a-zA-Z0-9-_.]+.{1}[]a-zA-Z]/';
            $regexpPhone = '/0{1}[1-9]{1}[0-9]{8}/';
            $regexpPole = '/[0-9]{7}[A-Z]{1}/';
            $regexpNumb = '/\d/';
            $regexpLink = '/https:\/\/www.codecademy.com\/fr\/{1}\w/';
            //on verifie si les champs sont renseigné 
            if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['birth']) 
                    && isset($_POST['birthCountrie']) && isset($_POST['nationnalitie']) && isset($_POST['address'])
                    && isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['diploma'])
                    && isset($_POST['poleEmploi']) && isset($_POST['badge']) && isset($_POST['link'])
                    && isset($_POST['hero']) && isset($_POST['hacks']) && isset($_POST['imformatique'])){
                // on verifie si le nom correspond a la regexp name
                if(preg_match($regexpName, $_POST['lastName'])){
        ?>
        <p>
            <?php   
                            echo 'votre nom est ' . strip_tags($_POST['lastName']);
               }else {
                   echo 'Votre nom n\'est pas bon';
                }
            ?>
        </p>
        <p>
            <?php
                // on verifie si le prenom correspond a la regexp name
                if(preg_match($regexpName, $_POST['firstName'])){
                    echo 'Votre prénom est ' . strip_tags($_POST['firstName']);
                }else {
                    echo 'Votre prénom n\'est pas bon';
                }
            ?>
        </p>
        <p>
            <?php
                // on verifie si la date de naissance correspond a la regexp Date
                if(preg_match($regexpDate, strip_tags($_POST['birth']))){
                    echo 'Vous êtes née le ' . $_POST['birth'];
                }else{
                   echo 'Votre date de naissance n\'est pas au bon format';
                }
            ?>
        </p>
        <p>
            <?php
                // on verifie si le pays de naissance correspond a la regexp letter
                if(preg_match($regexpLetter, $_POST['birthCountrie'])){
                    echo 'vous êtes née en/au ' . strip_tags($_POST['birthCountrie']);
                }else{
                    echo 'Votre pays de naissance ne contient pas que des lettres'; 
                }
            ?>
        </p>
        <p>
            <?php
                // on verifie si la nationnaliter correspond a la regexp letter
                if(preg_match($regexpLetter, $_POST['nationnalitie'])){
                    echo 'Vous êtes ' . strip_tags($_POST['nationnalitie']);
                 }else{
                    echo 'Votre nationnalité ne contient pas que des lettres'; 
                }
            ?></p>
        <p>
            <?php
                // on verifie si l'adresse correspond a la regexp address
                if(preg_match($regexpAddress, $_POST['address'])){
                    echo 'Votre adresse est ' . strip_tags($_POST['address']);
                }else{
                    echo 'Votre adresse n\'est pas valide'; 
                }
            ?></p>
        <p>
            <?php
                // on verifie si l'email correspond a la regexp mail
                if(preg_match($regexpMail, $_POST['mail'])){
                    echo 'Votre adresse mail est ' . strip_tags($_POST['mail']);
                }else{
                    echo 'Votre mail n\'est pas valide'; 
                }
            ?>
        </p>
        <p>
            <?php 
                // on verifie si le téléphone correspond a la regexp Phone
                if(preg_match($regexpPhone, $_POST['phone'])){
                    echo 'votre Téléphone est le ' . strip_tags($_POST['phone']);
                }else{
                    echo 'Votre téléphone n\'est pas valide'; 
                }
            ?>
        </p>
        <p><?php echo $_POST['diploma'];?></p>
        <p>
            <?php
                // on verifie si le n° pole emploi correspond a la regexp poleemploi
                if(preg_match($regexpPole, $_POST['poleEmploi'])){
                    echo 'Votre numéro de pôle emploi est ' . strip_tags($_POST['poleEmploi']);
                }else{
                    echo 'Votre numéro de pôle emploi n\'est pas valide'; 
                }
            ?>
        </p>
        <p>
            <?php
                // on verifie si le nb de badge correspond a la regexp numb
                if(preg_match($regexpNumb, $_POST['badge'])){
                    echo 'Vous avez ' . strip_tags($_POST['badge']) . ' Badge(s)';
                }else{
                    echo 'Vos nombre de badge n\'est pas valide'; 
                }    
            ?>
        </p>
        <p>
            <?php
                // on verifie si le lien correspond a la regexp link
                if(preg_match($regexpLink, $_POST['link'])){
                    echo 'Votre liens codecademy : ' . strip_tags($_POST['link']);
                }else{
                    echo 'Votre Lien n\'est pas valide'; 
                } 
            ?>
        </p>
        <p><?php echo 'le Hero que vous seriez est ' . strip_tags($_POST['hero']);?></p>
        <p><?php echo 'Un de vos hack est : ' . strip_tags($_POST['hacks']);?></p>
        <p><?php echo 'Connaissance en informayique? ' .strip_tags($_POST['imformatique']);?></p>
        <?php
            }else {
        ?>
        <form name="formApprenant" action="index.php" method="POST">
            <ul>
                <li><label>Nom: <input type="text" name="lastName"/></label></li>
                <li><label>Prénoms: <input type="text" name="firstName"/></label></li>
                <li><label>Date de naissance: <input type="text" name="birth"/></label></li>
                <li><label>Pays de naissance: <input type="text" name="birthCountrie"/></label></li>
                <li><label>Nationalité: <input type="text" name="nationnalitie"/></label></li>
                <li><label>Adresse: <input type="text" name="address"/></label></li>
                <li><label>Email: <input type="email" name="mail"/></label></li>
                <li><label>Téléphone: <input type="text" name="phone"/></label></li>
                <li><label>dîplome: <select name="diploma">
                            <option value="sans">sans</option>
                            <option value="BAC">BAC</option>
                            <option value="BAC+2">BAC+2</option>
                            <option value="BAC+3">BAC+3</option>
                            <option value="Supérieur">Supérieur</option>
                </select></label></li>
                <li><label>Numéros Pôle emploi: <input type="text" name="poleEmploi"/></label></li>
                <li><label>Nombre de badge: <input type="text" name="badge"/></label></li>
                <li><label>liens codecademy: <input type="text" name="link"/></label></li>
                <li><label>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? <textarea name="hero"></textarea></label></li>
                <li><label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) <textarea name="hacks"></textarea></label></li>
                <li><label>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? 
                        <select name="imformatique">
                            <option value="oui">oui</option>
                            <option value="non">non</option>
                </select></label></li>
                <li><input type="submit" value="envoyer"/></li>
            </ul>
        </form>
        <?php
            }
        ?>
    </body>
</html>