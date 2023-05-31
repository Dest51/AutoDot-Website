<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $phoneNumber = $_POST["phoneNumber"];
  
  // Збереження номера телефону у файл
  $file = fopen("callBackNumbers.txt", "a"); // Відкриття файлу у режимі допису
  fwrite($file, $phoneNumber . "\n");
  fclose($file);
  
  echo "Через 30 секунд ми вам передзвонимо, засікайте час!";
}
?>
