<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Авто ТОЧКА</title>
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>

    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });

    // Відкриття модального вікна
    function openModal() {
      $("#myModal").css({
        display: "block"});
    }

    // Закриття модального вікна
    function closeModal() {
      $("#myModal").css({
        display: "none"});
    }

    // Отримання значення введеного номера телефону та збереження у файл
    function makeCall() {
      var phoneNumber = $("#phoneNumber").val();
      $.ajax({
        url: "savePhoneNumber.php",
        method: "POST",
        data: { phoneNumber: phoneNumber },
        success: function(response) {
          $("#messageContainer").text(response);
          setTimeout(function() {
            $("#messageContainer").text("");
          }, 3000);
        }
      });
    }
  </script>
  <style>
    /* стилі для заднього фону модального вікна */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }
  </style>
</head>
<body>
    <!-- Модальне вікно -->
    <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h3>Введіть номер телефону</h3> <br>
      <input type="tel" id="phoneNumber" placeholder="Введіть номер телефону"><br><br>
      <button class="call-button" onclick="makeCall()">Передзвоніть мені</button>
      <div id="messageContainer" class="message"></div>
    </div>
  </div>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>АВТО . ТОЧКА</span>
    </div>
    <div id="about">
      <a href="index.php" title="Головна сторінка">Головна</a> 
      <a href="services.php" title="Послуги" >Послуги</a>
      <a href="about.php" title="Про нас">Про нас</a>
      <a href="reviews.php" title="Відгуки">Відгуки</a>
      
    </div>
  </header>

   <div id="top" style="height: 100px;">
  
  </div>

<div id="main_2">
    <h1>Про нас</h1>
    
    <div class="s_text_3">
      <span>Торгівельно-сервісна мережа АвтоТочка працює з 1992 року, представлена 
у Миколаєві.
 Обслуговуємо і продаємо запчастини для всіх типів авто і спецтехніки.
Пропонуємо до придбання нові та вживані легкові автомобілі,
а також вантажну та спецтехніку, автобуси, трактори.</span>
       <div class="main_button_3"><a class="main_button" onclick="openModal()"> </a> </div>
    </div>
  </div>

  <div id="contacts">
    <center><h5>Не сподобалась якість обслуговування або маєте якісь поради? <br>Заповніть форму і розкажіть нам про це!</h5></center>
    <h3 style="text-align: center; background-color: lightblue">Ваша думка для нас дуже важлива</h3>


    <form id="form_input" method="POST" action="form_handler_feedback.php">
      <label for="name">Ім'я <span>*</span></label><br>
      <input type="text" placeholder="Введіть ім'я" name="name" id="name"><br>
      <label for="email">Ваша пошта <span>*</span></label><br>
      <input type="email" placeholder="Введіть email" name="email" id="email"><br>
      <label for="message">Повідомлення<span>*</span></label><br>
      <textarea style="font-size: 1.2em; height: 150px; width: 70%" placeholder="Введіть ваше повідомлення" name="message" id="message"></textarea><br>
      <button type="submit" id="mess_send" class="btn" >Відправити</button>
      
    </form>

  </div>
  
  <div id="footer">
    <div>
      <span class="f_title">АВТО . ТОЧКА</span><br>
      
      <p style="text-align: inherit; padding-top: 90px">Developed by Topchii Artem</p>
    </div>
    <div class="f_menu">
     
       <a href="services.php" title="Послуги" >Послуги</a><br>
       <a href="about.php" title="Про нас">Про нас</a><br>
       <a href="reviews.php" title="Відгуки">Відгуки</a>
      
    </div >
    <div class="f_number">
      <br>
      +38 (063) 555 66 77<br>
      Пн-Нд. з 8 до 20  
      
    </div>
    <div class="f_adress">
      м. Миколаїв.<br>
      вул. Декабристів, 18<br>
      Пн-Пт: 8:00-20:00<br>
      Cб: 8:00-16:00<br>
      Нд: вихідний<br>


      <p style="text-align: right; padding-top: 20%; font-size: 15px;">Політика конфідеційности</p>
    </div>
  </div>

  
</body>
</html>