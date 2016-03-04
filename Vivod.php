<meta charset="Utf-8">
<?php
$host='localhost';
$dbname='bz';
$user='root';
 $password='';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("set names utf8");
}

    catch(PDOException $e) {
    echo $e->getMessage();
   
}

$stmt = $db->query('SELECT * FROM users;');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo "<p>" . "id: " . $row['id'] . "&brvbar;" . "&nbsp;" . "login: " . $row['login'] . "&brvbar;" . "&nbsp;"  . "password: " . $row['password'] ."</p>";
}
echo "<a href='index.php'>На главную</a>"
?>