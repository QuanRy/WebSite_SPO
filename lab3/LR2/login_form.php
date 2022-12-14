<?php require_once "db.php" ?>

<?php
$data = $_POST;
$count = 0;
// $test_header = 0;

if (isset($data['do_login'])) {
    $user = R::findOne('users', 'telephone = ?', array($data['telephone']));

    if ($user) {
        if (password_verify($data['password'], $user->password)) {
            // ob_start();
            //всё хорошо логиним пользоватя
            $_SESSION['logged_user'] = $user;
            echo '<label class="warning_reg" style=" color: green; padding-left: 860px; font-weight: bold;">Вы успешно авторизовались!</label>';
            // header('Location: index_filter.php');
            // $test_header = 1;
            // ob_end_flush();
        } else {
            $errors[] = "Неверно введён пароль!";
        }
    } else {
        $errors[] = "Пользователь с таким номером телефона не найден!";
    }

    $count = 0;
    if (!empty($errors)) {
        // echo '<label class="r">'.array_shift($errors).'</label>';
        echo '<label class="r" style=" color: red; padding-left: 860px; font-weight: bold;">' . array_shift($errors) . '</label>';
    }

    // if ($test_header == 1){
    //     header('Location: http://lr2/index_filter.php');
    // }
}
?>

<link rel="stylesheet" href="style2.css">
<div id="login_form">
    <form action="login.php" method="post" style="height: 340px;">
        <h1 title="Форма авторизации на сайте">Авторизация</h1>

        <div class="group">
            <label for="">Введите номер телефона:</label>
            <input type="tel" name="telephone" class="form-control" name="telephone" id="telephone" value="<?php echo @$data['telephone']; ?>" placeholder="+79001234567" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">
        </div>

        <div class="group">
            <label for="">Пароль:</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo @$data['password']; ?>" placeholder="Введите пароль" maxlength="25" size="25" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*">
        </div>

        <div class="group">
            <center><button type="submit" name="do_login">Войти</button></center>
        </div>

        <?php if (isset($_SESSION['logged_user'])) : ?>
            <div class="group">
                <center><a class="nav-link" href="index_filter.php" style=" text-transform: uppercase;">→ Главная страница ←</a></center>
            </div>
        <?php endif; ?>


    </form>
</div>


</html>