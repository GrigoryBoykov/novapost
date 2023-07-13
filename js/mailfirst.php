<!-- <?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mall->setLanguage('ru', 'phpmailer/language/');
  $mail->IsHTML(true);

  //Om кого-письмо
  $mail->setFrom('grigory.spn@mail.ru', 'Фрилансер по жизни');
  //Кому отправить
  $mail->addAddress('holaamigo1221@mail.ru') ;
  //Тема письма
  $mail->Subject = 'Привет! Это "Фрилансер по жизни"';

  //Тело письма
  $body = '<h1>Встречайте супер письмо!</h1>';

  if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
  }
  if(trim(!empty($_POST['tel']))){
    $body.='<p><strong>Телефон:</strong> '.$_POST['tel'].'</p>';
  }

  $mail->Body = $body;

  //Отправляем
  if (!$mail->send()) {
    $message = 'Ошибка';
  } else {
    $message = 'Данные отправлены!';
  }

  $response = ['message' => $message];

  header('Content-type: application/json');
  echo json_encode($response);
?> -->
