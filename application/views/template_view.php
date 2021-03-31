<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Heartlys - Place Your Company Name Here</title>
  <!--<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />-->
  <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
  <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
</head>

<body>
  <div id="top_bar_black">
    <div id="logo_container">
      <div id="logo_image"> </div>
      
      <div id="nav_block">
        <div class="nav_button"><a href="/main">Главная</a></div>
        <div class="nav_button"><a href="/contacts">Контакты</a></div>
        <div class="nav_button"><a href="/info">О нас</a></div>
        <div class="nav_button"><a href="/portfolio">Портфолио</a></div>
      </div>

    </div>
  </div>
  <div id="content_container">
    <div id="header">
      <div class="header_content_mainline"> Приветствуем Вас! </div>
      <div id="header_content_tagline">Это электронная библиотека</div>
    </div>

    <!--<div id="header_lower">
      <div id="header_content_mainline"> <h1>Важная информация:</h1>
        <div id="header_content_tagline"></div>
      </div>
    </div>-->
    <div class="flex-container">
      <div id="content_include"> 
          <?php include 'application/views/' . $content_view;?>
      </div>
    </div>
  </div>


  <div id="bottom_bar_black">
    <div id="main_container">
      <div id="header_lower">
        <div id="header_content_lowerline">Контакты:
          <div id="header_content_lowerboxcontent">Россия, Москва, 119019<br />
            ул. Арбат, 1а<br />
            info@mysite.ru<br />
            www.domainhappy.com<br />
            +7(495)000-00-00<BR />
          </div>
        </div>
      </div>

      <div id="header_lower">
        <div id="header_content_lowerline">Обратная связь:
          <div id="header_content_lowerboxcontent"> 
          <div class="textcols-item forms">
        <div class="form-group ">
            <input type="text" id="text_name" name="text" placeholder="Имя"/>
        </div>
        <div class="form-group ">
            <input type="text" id="text_mail" name="text" placeholder="Эл.почта">
        </div>
        <div class="form-group ">
            <textarea type="text" class="form-control" id="inputMessage" placeholder="Сообщение" ></textarea>
        </div>
    
            <input type="submit" class="submit" value="Отправить" />
            <!--<button class="button send">Отправить</button>-->
	</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="copywriteblock"> Designed by <a href="http://www.pixelateddesign.co.uk/">www.pixelateddesign.co.uk </a></div>
 
</body>

</html>