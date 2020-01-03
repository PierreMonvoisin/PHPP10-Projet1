<?php
$validate = false;
// RegEx
// \u00C0-\u00FF = All accented characters (ASCII 192 -> 255)
$regExText = '/^[a-zA-Z0-9 àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ,;"\']{1,250}$/';
$regExCodecademy = "/^(https:\/\/)?(www.)?([cC]{1}odecademy.com\/){1}([a-zA-Z0-9]){1,50}$/";
function cleanInput($data) {
  // Enlève les espaces en trop
  $data = trim($data);
  // Enlève les slashs
  $data = stripslashes($data);
  // Transforme les character spéciaux pour les rendre inactif
  $data = htmlspecialchars($data);
  return $data;
}
// Si le formulaire a été validé avec le bouton et est en méthode GET
if (isset($_GET['submitButton']) && $_SERVER['REQUEST_METHOD'] === 'GET'){
  // Collection des informations
  $lastName = cleanInput($_GET['lastName']);
  // Validation des informations
  preg_match($regExText, $lastName) ? $lastName : $lastName = 'WrongInput';
  $firstName = cleanInput($_GET['firstName']);
  preg_match($regExText, $firstName) ? $firstName : $firstName = 'WrongInput';
  $birthday = cleanInput($_GET['birthday']);
  $birthday = date_create_from_format('Y-m-j',$birthday);
  $country = cleanInput($_GET['country']);
  $nationality = cleanInput($_GET['nationality']);
  $adress = cleanInput($_GET['adress']);
  $email = cleanInput($_GET['email']);
  filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : $email = 'WrongInput';
  $phoneNumber = cleanInput($_GET['phoneNumber']);
  $degree = cleanInput($_GET['degree']);
  $poleEmploiLogin = cleanInput($_GET['poleEmploiLogin']);
  $numberPalmes = cleanInput($_GET['numberPalmes']);
  $codecademyURL = cleanInput($_GET['codecademyURL']);
  preg_match($regExCodecademy, $codecademyURL) ? $codecademyURL : $codecademyURL = 'WrongInput';
  $superheroStory = cleanInput($_GET['superheroStory']);
  preg_match($regExText, $superheroStory) ? $superheroStory : $superheroStory = 'WrongInput';
  $hackStory = cleanInput($_GET['hackStory']);
  preg_match($regExText, $hackStory) ? $hackStory : $hackStory = 'WrongInput';
  $experienceRadio = cleanInput($_GET['experienceRadio']);
  // Valide la collection de donnée pour affichage
  $validate = true;
} ?>
<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Projet 1</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="container d-flex">
  <div class="card m-auto p-1 bg-success shadow-lg">
    <div class="card-body">
      <div>
        <?php
        if ($validate === true){ ?>
          <div class="text-white text-center">
            <p>Bonjour <?= $firstName. ' ' .$lastName ?>, vous êtes né(e) le <?= date_format($birthday,'d/m/Y') ?> et êtes <?= $nationality ?>.</p>
            <p>Vous habitez au <?= $adress ?> en <?= $country ?>.</p>
            <p>Nous pouvons vous contacter à <?= $email ?> ou par téléphone au <?= $phoneNumber ?>.</p>
            <p>Vous avez le niveau <?= $degree ?>, <?= $numberPalmes ?> palmes et votre liens CodeCademy est <?= $codecademyURL ?>.</p>
            <?php if ($experienceRadio == 'Oui'){ ?>
              <p>Vous avez déjà de l'expérience de ce domaine.</p>
            <?php } else { ?>
              <p>Vous n'avez pas encore d'expérience dans ce domaine.</p>
            <?php } ?>
            <p class="text-underline"><u>Ce que vous aviez à nous raconter :</u></p>
            <p class="text-justify"><u>Votre histoire de Super Hero</u> : "<?= $superheroStory ?>".</p>
            <p class="text-justify"><u>Votre histoire de Hack</u> : "<?= $hackStory ?>".</p>
          </div>
        <?php } else { ?>
          <!-- Sinon, affichage du formulaire -->
          <form id="form" action="index.php" method="get" autocomplete="on">
            <!-- First slide -->
            <div class="form-group">
              <label for="lastname">Nom</label>
              <input type="text" class="form-control" id="lastname" name="lastName" placeholder="Doe" required>
            </div>
            <div class="form-group">
              <label for="firstname">Prénom</label>
              <input type="text" class="form-control" id="firstname" name="firstName" placeholder="John" required>
            </div>
            <div class="form-group">
              <label for="birthday">Date de naissance</label>
              <!-- The date input type is not supported in all browsers. Please be sure to test, and consider using a polyfill. -->
              <input type="date" class="form-control" id="birthday" name="birthday" required>
            </div>
            <!-- Second slide -->
            <div id="secondSlide">
              <div class="form-group">
                <label for="country">Pays</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="France" required>
              </div>
              <div class="form-group">
                <label for="nationality">Nationalité</label>
                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Français" required>
              </div>
              <div class="form-group">
                <label for="adress">Adresse</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="73 Rue de Verdun..." required>
              </div>
            </div>
            <!-- Third slide -->
            <div id="thirdSlide">
              <div class="form-group">
                <label for="email">Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@mail.com" required>
              </div>
              <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="text" class="form-control" id="phone" name="phoneNumber" placeholder="0X/11/22/33/44" required>
              </div>
            </div>
            <!-- Fourth Slide -->
            <div id="fourthSlide">
              <div class="form-group">
                <label for="degree">Diplôme</label>
                <input list="levels" name="degree" id="degree" placeholder="Diplômes" required>
                <datalist id="levels">
                  <option value="Sans Diplôme"></option>
                  <option value="Bac"></option>
                  <option value="Bac +2"></option>
                  <option value="Bac +3"></option>
                  <option value="Supérieur"></option>
                </datalist>
              </div>
              <div class="form-group">
                <label for="poleEmploi">Pôle Emploi</label>
                <input type="text" class="form-control" id="poleEmploi" name="poleEmploiLogin" placeholder="1234567A" required>
              </div>
              <div class="form-group">
                <label for="palmes">Palmes</label>
                <input id="palmes" type="range" name="numberPalmes" class="custom-range" min="0" max="6" step="1" required>
              </div>
              <div class="form-group">
                <label for="codecademy">CodeCademy</label>
                <input type="text" class="form-control" name="codecademyURL" id="codecademy" placeholder="codecademy.com/user" required>
              </div>
            </div>
            <!-- Fifth slide -->
            <div id="fifthSlide">
              <div class="form-group">
                <label for="superhero">Superhero</label>
                <textarea id="superhero" name="superheroStory" rows="5" cols="30" placeholder="Si j'étais un superhero, je serais ..."></textarea>
              </div>
              <div class="form-group">
                <label for="hackStory">Hack Story</label>
                <textarea id="hackStory" name="hackStory" rows="5" cols="30" placeholder="Un jour, j'ai piraté ..."></textarea>
              </div>
              <div class="form-group d-flex">
                <label for="experienceYes">Expérience</label>
                <input class="my-auto mx-2" type="radio" id="experienceYes" name="experienceRadio" value="Oui" required>
                <label name="Yes" for="experienceYes">OUI</label>
                <label class="sr-only" for="experienceNo">Expérience</label>
                <input class="my-auto mx-2" type="radio" id="experienceNo" name="experienceRadio" value="Non" required>
                <label name="No" for="experienceNo">NON</label>
              </div>
              <input class="m-auto" name="submitButton" id="submitButton" type="submit" value="Continuer">
            </div>
          </form>
        <?php } ?>
      </div>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='assets/js/script.js'></script>
</body>
</html>
