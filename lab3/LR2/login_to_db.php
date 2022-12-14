<!-- <?php
    $telephone = filter_var(trim($_POST['telephone']),
    FILTER_SANITIZE_STRING);

    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

        //  хэширование пароля
        $password = md5($password."sbfb434jvbskv1sdadg13sfs0gkjh54fd");

        $mysql = new mysqli('localhost', 'root', '', 'db');
   
        $result = $mysql->query("SELECT * FROM `users` WHERE `telephone` = '$telephone' AND `password` = '$password'");

        $user = $result->fetch_assoc();

        // if(count($user) == 0) {
        //     echo "Такой пользователь не найден!";
        //     exit();
        // }
        
        setcookie('user', $user['id_user'], time() + 3600, "/");


        
        $mysql->close();
        
        if ($user['id_user'] != 0){
            header('Location: /index_filter.php');
        }
        else {
            header('Location: /login.php');
        }
   
    //    //  для адресации обратно на форму регистрации - далее сделать, чтобы кинуло на главную
    //     header('Location: /index_filter.php');
?> -->