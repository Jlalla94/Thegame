<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
function add_worker($link,$price,$level,$class,$user_id){
    $query = "INSERT INTO worker VALUES(NULL,'$price','$level','$class','$user_id')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}
function delite_worker($link,$id_worker){
    $query ="DELETE FROM worker WHERE id_worker = '$id_worker'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}
function change_worker($link,$id_worker,$price_new,$level_new,$class_new,$user_id_new){
    $query ="UPDATE worker SET price='$price_new', level='$level_new', class='$class_new', user_id='$user_id_new' WHERE id_worker='$id_worker'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}

// закрываем подключение
mysqli_close($link);
?>