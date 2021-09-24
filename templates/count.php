<?php


$servername = "localhost";
$dbname = "api_app";
$username = "root";
$password = "root";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {

    echo "La connexion n'a pas pu aboutir. Veuillez recommencer ultérieurement" . $e->getMessage();
}

$sql = "SELECT COUNT(*) FROM foyc";
$res = $db->query($sql);
$count = $res->fetch();

echo "<div id ='count'>";
echo "Actuellement nous avons" . " " . $count[0] . " " . "source de plaisir. Vous pouvez en rajouter autant que vous voulez.";
echo "</div>";
$sqla = "SELECT id FROM foyc ORDER BY id DESC LIMIT 1 ";
$query = $db->prepare($sqla);

$query->execute();

while ($d = $query->fetch()) {

    echo "<br>";
    echo "<div id='lastid'>";
    echo "Le dernier id est égale à: " . $d['id'];
    echo "</div>";
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api foyc id details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>


</body>

</html>