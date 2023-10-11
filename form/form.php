<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form  action="echo.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="family_name">
    </div>
    <div>
      <label  for="¨Prénom">Prénom :</label>
      <input  type="text"  id="prénom"  name="given_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
    <label for="tel">Votre numéro de téléphone : </label>
    <input type="text" id="tel" name="phone_number">
</div>
<label for="Sujet">Sujet :</label>
        <select name="Sujet" id="Sujet" name= "Sujet" required>
            <option value="" disabled selected hidden>Choisir un sujet</option>
            <option value="Sujet 1">Sujet 1</option>
            <option value="Sujet 2">Sujet 2</option>
            <option value="Sujet 3">Sujet 3</option>
        </select>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  <?php
  include "echo.php";
  ?>
  </form>

  <?php
    //var_dump($_GET);
    //echo  $_GET['user_name'];
  ?>

</body>
</html>