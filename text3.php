<html>
  <head>
    <meta charset="utf-8">
    <title>�������� ����� �� ������</title>
  </head>
  <body>

    <form method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="��������� ����!">
    </form>





<?php
// ���� ���� ����������� �������� �����
if (isset($_FILES['file']))  
{ 
  //���� ��� ����� ������ 
  if($_FILES['file']['name'] == '') 
    echo ('���� �� ������!');
  //���� ������ ����� ��������� 1 ��
  elseif($_FILES['file']['size'] > 1048576) 
    echo ('������ ����� ��������� 1 ��!');
  else{
  // �������� ���� �� ��������� ����������
    copy($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    echo '���� ������� ��������';
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