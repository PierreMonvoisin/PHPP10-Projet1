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
        <form action="index.php" method="get" autocomplete="on">
          <!-- First slide -->
          <div class="form-group">
            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastName" placeholder="Doe">
          </div>
          <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstName" placeholder="John">
          </div>
          <div class="form-group">
            <label for="birthday">Date de naissance</label>
            // The date input type is not supported in all browsers. Please be sure to test, and consider using a polyfill.
            <input type="date" class="form-control" id="birthday" name="birthday">
          </div>
          <!-- Second slide -->
          <div id="secondSlide">
            <div class="form-group">
              <label for="country">Pays</label>
              <input type="text" class="form-control" id="country" name="country" placeholder="France">
            </div>
            <div class="form-group">
              <label for="nationality">Nationalité</label>
              <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Français">
            </div>
            <div class="form-group">
              <label for="adress">Adresse</label>
              <input type="text" class="form-control" id="adress" name="adress" placeholder="73 Rue de Verdun...">
            </div>
          </div>
          <!-- Third slide -->
          <div id="thirdSlide">
            <div class="form-group">
              <label for="email">Mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@mail.com">
            </div>
            <div class="form-group">
              <label for="phone">Téléphone</label>
              <input type="text" class="form-control" id="phone" name="phoneNumber" placeholder="0X/11/22/33/44">
            </div>
          </div>
          <!-- Fourth Slide -->
          <div id="fourthSlide">
            <div class="form-group">
              <label for="degree">Diplôme</label>
              <input list="levels" name="degree" id="degree" placeholder="Diplômes">
              <datalist id="levels">
                <option value="Sans">
                <option value="Bac">
                <option value="Bac +2">
                <option value="Bac +3">
                <option value="Supérieur">
              </datalist>
            </div>
            <div class="form-group">
              <label for="poleEmploi">Pôle Emploi</label>
              <input type="text" class="form-control" id="poleEmploi" name="poleEmploiLogin" placeholder="1234567A">
            </div>
            <div class="form-group">
              <label for="palmes">Palmes</label>
              <input id="palmes" type="range" name="numberPalmes" class="custom-range" min="0" max="6" step="1">
            </div>
            <div class="form-group">
              <label for="codecademy">CodeCademy</label>
              <input type="url" class="form-control" name="codecademyURL" id="codecademy" placeholder="codecademy.com/user">
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
              <input class="my-auto mx-2" type="radio" id="experienceYes" name="experienceRadio">
              <label for="experienceYes">OUI</label>
              <label class="sr-only" for="experienceNo">Expérience</label>
              <input class="my-auto mx-2" type="radio" id="experienceNo" name="experienceRadio">
              <label for="experienceNo">NON</label>
            </div>
          </div>
          <input class="m-auto" id="submitButton" type="submit" value="Continuer">
        </form>
      </div>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='assets/js/script.js'></script>
</body>
</html>
