<?php require_once "db.php" ?>
<?php
global $pdo;
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=db', 'root');
    $sql = "SELECT 
    ph.photo, ph.fio, tp.id_brigade, ph.characteristic, 
    ph.date_birth 
    FROM `fermers` ph
    JOIN `brigades` tp ON ph.id_brigade=tp.id_brigade";
    $arBinds = [];

    $ffio=0;
    $fid_brigade=0;
    $fcharacteristic=0;
    $fdate_birth=0;

    $vfio="0";
    $vid_brigade=0;
    $vcharacteristic="0";
    $vdate_birth="0";

    if(!key_exists('clearFilter', $_GET))
    {
      if(count($_GET) > 0)
      {
        
        if($_GET['fio'])
        {
          $ffio = 1;
          $vfio = htmlspecialchars($_GET['fio']);
        }
        if($_GET['id_brigade'])
        {
          $fid_brigade = 1;
          $vid_brigade = htmlspecialchars($_GET['id_brigade']);
        }
        if($_GET['date_birth'])
        {
          $fdate_birth = 1;
          $vdate_birth = htmlspecialchars($_GET['date_birth']);
        }
        if($_GET['characteristic'])
        {
          $fcharacteristic = 1;
          $vcharacteristic = htmlspecialchars($_GET['characteristic']);
        }

        if($ffio == 1 AND $fdate_birth == 0 AND $fcharacteristic == 0 AND $fid_brigade == 0)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
        }
        if($ffio == 0 AND $fdate_birth == 1 AND $fcharacteristic == 0 AND $fid_brigade == 0)
        {
          $sql .= " WHERE";
          $sql .= " ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
        }      
        if($ffio == 0 AND $fdate_birth == 0 AND $fcharacteristic == 1 AND $fid_brigade == 0)
        {
          $sql .= " WHERE";
          $sql .= " ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
        }
        if($ffio == 0 AND $fdate_birth == 0 AND $fcharacteristic == 0 AND $fid_brigade == 1)
        {
          //$sql .= " WHERE";
          $sql .= " WHERE ph.id_brigade = :id_brigade";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }


        if($ffio == 1 AND $fdate_birth == 1 AND $fcharacteristic == 0 AND $fid_brigade == 0)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
          $sql .= " AND ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
        }
        if($ffio == 1 AND $fdate_birth == 0 AND $fcharacteristic == 1 AND $fid_brigade == 0)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
          $sql .= " AND ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
        }
        if($ffio == 1 AND $fdate_birth == 0 AND $fcharacteristic == 0 AND $fid_brigade == 1)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
          $sql .= " AND ph.id_brigade = :id_brigade";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }
        if($ffio == 0 AND $fdate_birth == 1 AND $fcharacteristic == 1 AND $fid_brigade == 0)
        {
          $sql .= " WHERE";
          $sql .= " ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
          $sql .= " AND ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
        }
        if($ffio == 0 AND $fdate_birth == 1 AND $fcharacteristic == 0 AND $fid_brigade == 1)
        {
          $sql .= " WHERE";
          $sql .= " ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
          $sql .= " AND ph.id_brigade = :id_brigade";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }
        if($ffio == 0 AND $fdate_birth == 0 AND $fcharacteristic == 1 AND $fid_brigade == 1)
        {
          $sql .= " WHERE";
          $sql .= " ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
          $sql .= " AND ph.id_brigade = :name";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }

        if($ffio == 1 AND $fdate_birth == 1 AND $fcharacteristic == 1 AND $fid_brigade == 0)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
          $sql .= " AND ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
          $sql .= " AND ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
        }       
        if($ffio == 1 AND $fdate_birth == 0 AND $fcharacteristic == 1 AND $fid_brigade == 1)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
          $sql .= " AND ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
          $sql .= " AND ph.id_brigade = :id_brigade";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }
        if($ffio == 1 AND $fdate_birth == 1 AND $fcharacteristic == 0 AND $fid_brigade == 1)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
          $sql .= " AND ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
          $sql .= " AND ph.id_brigade = :id_brigade";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }
        if($ffio == 0 AND $fdate_birth == 1 AND $fcharacteristic == 1 AND $fid_brigade == 1)
        {
          $sql .= " WHERE";
          $sql .= " ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
          $sql .= " AND ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
          $sql .= " AND ph.id_types = :id_brigade";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }

        if($ffio == 1 AND $fdate_birth == 1 AND $fcharacteristic == 1 AND $fid_brigade == 1)
        {
          $sql .= " WHERE";
          $sql .= " ph.fio = :fio";
          $arBinds['fio'] = htmlspecialchars($_GET['fio']);
          $sql .= " AND ph.date_birth = :date_birth";
          $arBinds['date_birth'] = htmlspecialchars($_GET['date_birth']);
          $sql .= " AND ph.characteristic = :characteristic";
          $arBinds['characteristic'] = htmlspecialchars($_GET['characteristic']);
          $sql .= " AND ph.id_brigade = :id_brigade";
          $arBinds['id_brigade'] = htmlspecialchars($_GET['id_brigade']);
        }
      }
    }

    $stmt = $pdo -> prepare($sql);
    $result = $stmt ->execute($arBinds);
    $result = $stmt->fetchAll();
}
catch (PDOException $exception)
{
    echo $exception->getMessage();
    die;
}?>