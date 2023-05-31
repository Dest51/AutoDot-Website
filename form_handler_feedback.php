<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Збереження даних у файл
  $file = fopen("feedback.txt", "a"); // Відкриття файлу у режимі допису
  fwrite($file, "Ім'я: " . $name . "\n");
  fwrite($file, "Email: " . $email . "\n");
  fwrite($file, "Повідомлення: " . $message . "\n\n");
  fclose($file);
  
  //Повернення на головну сторінку
  header("Location: autodot.topchii.site:81/about.php#");

}
?>
