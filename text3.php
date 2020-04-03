<html>
  <head>
    <meta charset="utf-8">
    <title>Загрузка файла на сервер</title>
  </head>
  <body>

    <form method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="Загрузить файл!">
    </form>





<?php
// если была произведена отправка формы
if (isset($_FILES['file']))  
{ 
  //если имя файла пустое 
  if($_FILES['file']['name'] == '') 
    echo ('Файл не выбран!');
  //если размер файла превышает 1 Мб
  elseif($_FILES['file']['size'] > 1048576) 
    echo ('Размер файла превышает 1 Мб!');
  else{
  // копируем файл из временной директории
    copy($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    echo 'Файл успешно загружен';
  }

}

if (isset($_FILES['file']))  
{ 
header("location: text3.php");
exit;
}


?>

  </body>
</html>