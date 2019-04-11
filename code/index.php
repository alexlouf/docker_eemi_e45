<?php
$conn = new PDO('mysql:dbname=counter;host=dockerbasic_mariadb_1;port=3306', 'root', 'root');

$stmt = $conn->prepare("SELECT * FROM counter WHERE id = 1");
$stmt->execute();
$row = $stmt->fetch();


$counter = $row["counter"] + 1;

$sql = "UPDATE counter SET counter=? WHERE id=1";
$stmt = $conn->prepare($sql);
$stmt->execute([$counter]);


?>

Vous avez rafraichi la page <?= $counter ?> fois

<br>
<br>

Voir le PHP INFO (exercice 4) : <a href="phpinfo.php">Lien</a>