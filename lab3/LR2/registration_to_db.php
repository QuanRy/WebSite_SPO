<!-- <?php
    $fio = filter_var(trim($_POST['fio']),
     FILTER_SANITIZE_STRING);

     $telephone = filter_var(trim($_POST['telephone']),
     FILTER_SANITIZE_STRING);

     $email = filter_var(trim($_POST['email']),
     FILTER_SANITIZE_EMAIL);

     $password = filter_var(trim($_POST['password']),
     FILTER_SANITIZE_STRING);

   //   if (mb_strlen($fio) < 6 || mb_strlen($fio) > 100) {
   //      echo "Непопустимая длина ФИО";
   //      exit();
   //   } 
   //   else if (mb_strlen($telephone) < 6 || mb_strlen($telephone) > 13){
   //      echo "Непопустимая длина номера телефона";
   //      exit();
   //   } 
   //   else if (mb_strlen($email) < 6 || mb_strlen($email) > 25){
   //      echo "Непопустимая длина номера телефона";
   //      exit();
   //   } 
   //   else if (mb_strlen($password) < 8 || mb_strlen($password) > 30){
   //      echo "Недопустимый пароль";
   //      exit();
   //   } 
     
    //если массив ошибок пустой то регестрируем
    $user->fio = $data['fio'];
    $user->telephone = $data['telephone'];
    $user->email = $data['email'];
    $user->password = md5($password."sbfb434jvbskv1sdadg13sfs0gkjh54fd");

   //  echo '<label>Вы успешно зарегестрировались!</label>'; //сделать чтоб надпись пропадала через какое то время

    //всё логиним пользователя
    $_SESSION['logged_user']=$user;

    //  хэширование пароля
    //  $password = md5($password."sbfb434jvbskv1sdadg13sfs0gkjh54fd");

     $mysql = new mysqli('localhost', 'root', '', 'db');

     $mysql->query("INSERT INTO `users` (`fio`, `telephone`, `email`, `password`)
     VALUES ('$fio', '$telephone', '$email', '$password')");

     $mysql->close();

    //  для адресации обратно на форму регистрации - далее сделать, чтобы кинуло на главную
     header('Location: /login.php');
?> -->