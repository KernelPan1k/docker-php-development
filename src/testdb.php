<?php

$db = new PDO('mysql:host=db;dbname=myDb', 'user', 'test');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE TABLE IF NOT EXISTS `testtable` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$db->exec("INSERT INTO testtable (name) VALUES ('I am a sample')");

$query = $db->query("SELECT * FROM testtable");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<table>
    <?php foreach ($query->fetchAll() as $row) {
        echo "<tr><td>" . $row['id']. "</td><td>" . $row['name']. "</td><td>" . $row['date']. "</td></tr>";
    } ?>
</table>

<ul>
    <li><a href="http://127.0.0.1:9000" target="_blank">PHPMyAdmin (user/test)</a></li>
</ul>

</body>
</html>
