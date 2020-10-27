<?php
// Создаётся пустой файл вида sess_819gk3tcdvilccra1t9kjdvsv9
// На машину пользователя прилетает сессионная кука с ID сессии. В данном случае 819gk3tcdvilccra1t9kjdvsv9
session_start();

// Инициализация строки с сообщениями об ошибках
$message = '';

// Если запрос отправлен методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST"):
  $name = strip_tags($_POST["name"]);
  $age = (int)$_POST["age"];

  // Если поле `name` не заполнено
  if(empty($name)):
      $message = 'Поле `Ваше имя` обязательно к заполнению!';
  // Иначе, если поле `age` не заполнено
  elseif(empty($age)):
      $message = 'Поле `Ваш возраст` обязательно к заполнению!';
  // Если поля заполнены, записываем в сессию
  else:
      $_SESSION["name"] = $name;
      $_SESSION["age"] = $age;
  endif;

// Иначе берём данные из сессии
else:
    $name = $_SESSION["name"] ?? null;
    $age = $_SESSION["age"] ?? null;
endif;
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Сессии</title>
</head>
<body>
<h1>Создание сессии</h1>
<p><a href="destroy.php">Закрыть сессию</a></p>
<p><?= $message ?></p>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    Ваше имя: <br>
    <input type="text" name="name" value="<?= $name ?>"><br><br>
    Ваш возраст: <br>
    <input type="text" name="age" value="<?= $age !== 0 ? $age : '' ?>"><br><br>
    <input type="submit" value="Отправить">
</form>
<?
if ($name and $age) {
    echo "<h3>Привет, $name!</h3>";
    echo "<h3>Тебе $age лет</h3>";
}
?>
</body>
</html>