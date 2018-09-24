<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>
<body>
    <?php
   // echo '<h1>bienvenue</h1>';
   // echo "<form action='index.php/Home/AfficherLesJeux' methode='get'>";
    foreach($lesCateg as $uneCateg)
    {
        echo "<a href='index.php/Home/AfficherLesJeux/".$uneCateg->numero."'>".$uneCateg->libelle."</a><br>";
     //   echo "<input type='radio' name='nomCateg'>".$uneCateg->idCateg. "-" .$uneCateg->nomCateg."<input type='submit' value='afficher les jeux'>";
    }
    //echo '</form>';

    ?>
</body>
</html>