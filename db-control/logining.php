<?php
//Prisijungimas prie //


DEFINE("NAME", "kertas");
DEFINE("PASSWORD", "root"); // arba root
DEFINE("HOST", "localhost");
DEFINE("USER", "root"); // arba root

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME ); //portas dar jeigu keistas MySQL arba Apasche

function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}

session_start();



function getUser($name, $password) {
  $getData = "SELECT * FROM login WHERE name = $name AND password = $password";
  $data = mysqli_query(getPrisijungimas(), $getData);
  return $data;
}


// $pavyko = getLogin($name, $password);
// print_r($pavyko);

if ( ! empty( $_POST ) ) {
  $name = $_POST['name'];
  $password = $_POST['password'];
    if ( isset($name) && isset($password) ) {

      $name = stripslashes($name);
      $password = stripslashes($password);

      $login = getUser($name, $password);
      $rows = mysqli_num_rows($login);
      $login = mysqli_fetch_assoc($login);

    	if ($rows == 1) {
    		$_SESSION['id'] = $login["id"]; print_r($_SESSION['id']);
        header('Location: edit-services.php');
    	} else {
        header("Location: ../login.php");
      }
    }
} else {
  header("Location: ../login.php");
}

?>
