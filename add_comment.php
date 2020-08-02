<?php
session_start();

##  Проверяем, заполнены ли поля
if (empty($_POST['user_name']) || empty($_POST['user_text'])) {
  header('Location: index.php');
  $_SESSION['message'] = 'Заполните все поля.';
}
else {
  # соединяемся с бд
  require_once('connect.php');
  try {
    # переменные user и text
    $user_name = $_POST['user_name'];
    $user_text = $_POST['user_text'];

    # 1.Создаём текст sql запроса, что бы добавить новую строку в таблицу cash
    $sql = "INSERT INTO messages VALUES (NULL, NOW(), :user, :user_text)";

    //   # 2.Создаём массив с данными
    $data = array(
      'user'      => $user_name,
      'user_text' => $user_text
    );

    # 3. Подгатавливаем текст запроса
    $writemoney = $connect->prepare($sql);
    # 4.Выполняем запрос
    $writemoney->execute($data);

    $_SESSION['message'] = 'Запись сделана.';

    header('Location: index.php');
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

}

?>