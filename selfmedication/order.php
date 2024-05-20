<?php
// (A) PROCESS RESULT
$result = "";

//coonection to the databas
$dbhost = "localhost";
$dbname = "selfmedication";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// saving an oder to the database selfmedication
if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `email`, `qty`) VALUES (?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["qty"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// SEND ORDER VIA EMAIL
if ($result=="") {
 $to      = 'alexsaulngedo@gmail.com';
$subject = 'order received';
$message = 'hello';

mail($to, $subject, $message);
}
?>