<?php require_once "db.php" ?>
<?php
require_once 'logic.php';  // логика работы фильтрации
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7semyan</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <?php
    if (isset($_SESSION['logged_user']) ) // просто чтобы нельзя было написать ссылку и перейти без регистрации
    {
        require_once 'topper2.php';

        require_once 'filter.php';
    
        require_once 'footer.php';

        // header('Location: index.php');
    }
    else {
        // header('Location: registration.php');
        require_once 'topper.php';

        require_once 'first_lab.php';
    
        require_once 'footer.php';
        
    }
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>

</html>