<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="msg.css">
  <link rel="stylesheet" href="footer.css">

  <title>Тестовое задание на позицию php разработчика</title>
</head>

<body>
  <div class="wrap">
    <header>
      <div class="left_wrapper">
        <div class="contacts">
          <a class="contacts_phone" href="tel:+7 (499) 340 94 71">Телефон: (499) 340-94-71</a>
          <span class="contacts_mail">Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></span>
        </div>
        <div class="title_wrapper">
          <h1>Комментарии</h1>
        </div>
      </div>
      <div class="right_wrapper">
        <img src="./image/logo.png" alt="логотип">
      </div>
    </header>
    <div class="comments">
      <?php
      include('./comments.php');
      ?>
    </div>
    <hr>
    <main>
      <!-- комментарии из бд -->

      <!-- форма отправки комментариев -->
      <form action="add_comment.php" method="post">
        <h2>Оставить комментарий</h2>
        <label for="user_name">Ваше имя</label>
        <input class="user_name" type="text" name="user_name" id="user_name">
        <label for="user_text">Ваш комментарий</label>
        <textarea class="user_text" name="user_text" id="user_text" cols="30" rows="10"></textarea>
        <div class="buttom_wrap">
          <input class="buttom" type="submit" value="Отправить">
        </div>
        <div class="msg">
          <?php
          if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
          }
          unset($_SESSION['message']);
          ?>
        </div>
      </form>


    </main>
  </div>
  <footer>
    <div class="wrap_footer">
      <div class="logo">
        <img src="./image/logo_f.png" alt="Логотип">
      </div>
      <div class="about_wrap">
        <div class="contacts">
          <span><a class="contacts_f" href="tel:+7 (499) 340 94 71">Телефон: (499) 340-94-71</a></span>
          <span class="contacts_f">Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></span>
          <span class="contacts_f">Адрес: <a href="#">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></span>
        </div>
        <div class="copyright_true">© 2010 - 2014 Future. Все права защищены</div>
      </div>
    </div>
  </footer>
</body>

</html>