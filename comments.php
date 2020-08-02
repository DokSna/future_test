<?php
  require_once('connect.php');

  $sql = $connect->query('SELECT * FROM messages');

  # устанавливаем режим выборки
  $sql->setFetchMode(PDO::FETCH_ASSOC);

  # выводим строки таблицы
  while ($row = $sql->fetch()) {
    echo '
    <div class="messages">
    <div class="ustime">
      <div class="user">' . $row['user'];
      echo '</div>
      <div class="time">' . $row['time'];
      echo '</div>
    </div>
    <div class="us_text">' . $row['text'];
    echo '</div>
  </div>
    ';
}

