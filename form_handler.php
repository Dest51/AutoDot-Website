<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $tel = $_POST["tel"];

  // Збереження даних у файл
  $file = fopen("data.txt", "a"); // Відкриття файлу у режимі допису
  fwrite($file, "Ім'я: " . $name . "\n");
  fwrite($file, "Email: " . $email . "\n");
  fwrite($file, "Телефон: " . $tel . "\n");
  fwrite($file, "Повідомлення: " . $message . "\n\n");
  fclose($file);
  
  //Повернення на головну сторінку
  header("Location: autodot.topchii.site:81/index.php#");
}
?>
