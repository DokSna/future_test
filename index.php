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

  <title>Тестовое задание на позицию php разработчика</title>
</head>

<body>
  <div class="wrap">
    <header>
      <div class="left_wrapper">
        <div class="contacts">
          <a class="contacts_phone" href="tel:+7 (961) 230 73 49">Телефон: (499) 340-94-71</a>
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
    <footer>

    </footer>
  </div>
</body>

</html>