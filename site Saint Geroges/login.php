<?php 
$user = 'root';
$password = '';

$pass = $_POST ['pass'];
$mail = $_POST ['mail'];


$dbh = new PDO('mysql:host=localhost;dbname=saintgeorges', $user, $password);



// use the connection here
$sth = $dbh->query('SELECT * FROM user');
// fetch all rows into array, by default PDO::FETCH_BOTH is used
$rows = $sth->fetchAll();
// iterate over array by index and by name
foreach($rows as $row) {
    
}

if($row['mail'] == $mail and $row['pass'] == $pass){

    session_start();
    $_SESSION['name'] = $row['name'];
    $_SESSION['mail'] = $row['mail'];
    header('Location: http://localhost/Saint-Georges-/index.php');
    
}

else{

    header('Location: http://localhost/Saint-Georges-/login.html');
}





?>