<?php
session_start();

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {

  echo "Привет, " . $_SESSION['username'] . "!";
  echo "<br><a href='exit.php'>Выход</a>";
} else {

  echo "<h1>Авторизация</h1>";
  echo "<form action='post.php' method='post'>";
  echo "<label for='username'>Введите ваше имя: </label>";
  echo "<input type='text' name='username' id='username' required>";
  echo "<input type='submit' value='Войти'>";
  echo "</form>";
}
?>