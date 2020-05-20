<?php
$servername="localhost";
$username="root";
$password="Qwerty123";
$dbname = "examen";

try{
	$conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);

	$sql= "INSERT INTO `test` (`id`, `date`, `text`) VALUES ('17', '2020-04-04', 'Hello?')";
	$conn->exec($sql);
	echo "Запись 1 добавлена";
	
		$sql= "INSERT INTO `test` (`id`, `date`, `text`) VALUES ('16', '2000-04-14', 'you ok?')";
	$conn->exec($sql);
	echo "Запись 2 добавлена";
	
		$sql= "INSERT INTO `test` (`id`, `date`, `text`) VALUES ('15', '1999-12-31', 'how you doing?')";
	$conn->exec($sql);
	echo "Запись 3 добавлена";
}
catch(PDOException $e){
	echo $sql . $e->getMessage();
}
$conn= null;

?>