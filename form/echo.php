<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo 'Merci ';
echo $_POST['given_name'];
echo ' ' ;
echo $_POST['family_name'];
echo ' de nous avoir contacté à propos de ';
echo $_POST['Sujet'];
echo '<br> Un de nos conseiller vous contactera soit à l\'adresse ';
echo $_POST['user_email'];
echo ' ou par téléphone au ';
echo $_POST['phone_number'];
echo ' dans les plus brefs délais pour traiter votre demande : ';
echo '<br>';
echo $_POST['user_message'];

?>

</body>
</html>