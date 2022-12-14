<?php require_once "db.php" ?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head> -->


<?php

$data = $_POST;

if (isset($data['do_signup']))
{
    $errors = array();
    if(($data['fio'])=='')
    {
        $errors[] = 'Введите ФИО!';
    }

    if(($data['telephone'])=='')
    {
        $errors[] = 'Введите номер телефона!';
    }

    if(trim($data['email'])=='')
    {
        $errors[] = 'Введите email!';
    }

    if(($data['password'])=='')
    {
        $errors[] = 'Введите пароль!';
    }




    if(strlen($data['password'])<6)
    {
        $errors[] = 'Пароль должен быть длинее 6 символов';
    }

    if(R::count('users',"fio = ?", array($data['fio'])))
    {
        $errors[] = 'Пользователь с таким ФИО уже существует';
    }
    
    if(R::count('users',"telephone = ?", array($data['telephone'])))
    {
        $errors[] = 'Пользователь с таким номером телефона уже существует';
    }

    if(R::count('users',"email = ?", array($data['email'])))
    {
        $errors[] = 'Пользователь с таким email уже существует';
    }

    if (empty($errors))
    {
        //если массив ошибок пустой то регестрируем
        $user = R::dispense('users');
        $user->fio = $data['fio'];
        $user->telephone = $data['telephone'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
        R::store($user);
        echo '<label class="warning_reg" style=" color: green; padding-left: 860px; font-weight: bold;">Вы успешно зарегестрировались!</label>'; //сделать чтоб надпись пропадала через какое то время

        //всё регистрируем пользователя
        $_SESSION['logged_user']=$user;
        ob_start();
        header('Location: /login.php');
        ob_end_flush();
    }
    else
    {
        echo '<label class="warning_reg" style=" color: red; padding-left: 860px; font-weight: bold;">'.array_shift($errors).'</label>';
    }

}
?>

<link rel="stylesheet" href="style2.css">
<div id="registration_form">
    <form action="registration.php" method="post">
        <h1 title="Форма регистрации на сайте">Регистрация</h1>

        <div class="group">
            <label for="">Введите ваше ФИО:</label>
            <input type="text" class="form-control" name="fio" value="<?php echo @$data['fio'];?>" placeholder="Иванов Иван Иванович">
        </div>

        <div class="group">
            <label for="">Введите номер телефона:</label>
            <input type="tel" name="telephone" class="form-control" name="telephone" value="<?php echo @$data['telephone'];?>" placeholder="+79001234567" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">
        </div>

        <div class="group">
            <label for="">Введите ваш e-mail:</label>
            <input type="email" class="form-control" name="email" value="<?php echo @$data['email'];?>" placeholder="example@mail.ru">
        </div>

        <div class="group">
            <label for="">Пароль:</label>
            <input type="password" class="form-control" name="password" value="<?php echo @$data['password'];?>" placeholder="Введите пароль"  maxlength="25" size="25" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*">
        </div>

        <div class="group">
            <center><button id="btn_registration" name = "do_signup">Зарегистрироваться</button></center>
        </div>

        <div class="group">
            <!-- <center><label for="">✔ Я уже зарегистрирован</label></center> -->
            <center><a class="nav-link" href="login.php">✔ Я уже зарегистрирован</a></center>
            <!-- <center><button id="btn_login" onclick="<a href= 'login.php'></a>">Войти</button></center> -->
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</html>




