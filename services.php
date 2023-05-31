<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Авто ТОЧКА</title>
  <link rel="stylesheet" href="main.css">
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
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

  <div id="main">
    <h1>Перелік наших послуг:</h1>
    <div class="intro">
      <img src="images/autowash.png">
      
    </div>
    <div class="s_text">
      <h3 id="h3_wash">Мийка автомобілів</h3>
      <span>Як би людина акуратно не їздила, машина все одно забруднюватиметься. У процесі експлуатації автомобіль покривається маслянистою плівкою та шаром пилу. Лакофарбовий шар, що захищає кузов автомобіля від корозії та атмосферних опадів, також уразливий. Якщо транспортний засіб тривалий час перебуває під впливом забруднюючих речовин пошкодження фарби на кузові практично неминуче.</span>
       <h3 id="h3_wash_p">Від 300 грн</h3> 
       <div class="main_button_c"><a class="main_button" onclick="openModal()"> </a> </div>
    </div>
  </div>

<div id="main">
   
    <div class="s_text_2">
      <h3 id="h3_wash">Шиномонтаж</h3>
      <span>Щоб колеса вашого автомобіля прослужили довго, за ними потрібен постійний догляд. Будь-якому водієві відомо правило: "перевзувати" свою машину, тобто замінювати на ній покришки, зі зміною сезонів зима-літо. Робиться це з однієї простої причини: зимові покришкимають більш високе зчеплення з зледенілим або занесеним снігом дорожнім покриттям.</span>
       <h3 id="h3_wash_p">Від 400 грн</h3> 
       <div class="main_button_2"><a class="main_button" onclick="openModal()"> </a> </div>
    </div>
     <div class="intro_2">
      <img src="images/tiers.png">
      
    </div>
  </div>

  <div id="main">
    
    <div class="intro">
      <img src="images/repair.png">
      
    </div>
    <div class="s_text">
      <h3 id="h3_wash">Діагностика всіх систем авто</h3>
      <span>Для зниження ризиків поломок автомобіля регулярно проводиться його технічний огляд, тобто дігностика різних складових автомобілю, таких як двигун, трансмісія, технічні рідіни, ходової та гальмівної частини тощо.</span>
       <h3 id="h3_wash_p">Від 150 грн</h3> 
       <div class="main_button_c"><a class="main_button" onclick="openModal()"> </a> </div>
    </div>
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