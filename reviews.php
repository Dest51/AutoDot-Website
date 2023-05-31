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
  </script>
</head>
<body>

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

  <div id="main_2" style="background: #F3F3F3">
    <h1>Відгуки</h1>

    <div class="s_texts">
    <div class="s_text_4">
    	<img src="images/r_1.png" width="77px" >
    	<i>Галина Задорожна, BMW X6T</i> <br> <br> 
      <span>Щиро дякую АвтоТочці за якісну діагностику мого авто! Все детально перевірили і навіть надали список з результами перевірки, що дуже зручно, не треба тримати усні пояснення у голові. Рекомендую!</span>
     
    </div>
    <div class="s_text_5">
    		<img src="images/r_2.png" width="77px" >
    		<i>Петро Олександренко, Mersedes Benz</i> <br> <br> 
      <span>Довгий час не доглядав за своїм авто і й вона так забруднилося, що жах. Але тепер, завдяки хлопцям з Автоточки, моє авто так блистить, що аж намилуватися ним не можу. Дякую!</span>
     
    </div>
    <div class="s_text_6">
    		<img src="images/r_3.png" width="77px" >
    		<i>Томас Петренко, Suzuki One</i> <br> <br> 
      <span>Щиро вдячний за швидкий шиномонтаж мого авто. Все якісно і круто. Буду рекомендувати знайомим автомобілістам.</span>
     
    </div>

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