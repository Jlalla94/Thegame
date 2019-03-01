<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
function add_office($link,$name,$comfort,$place,$rent){
    $query = "INSERT INTO office VALUES(NULL,'$name','$comfort','$place','$rent')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}
function delite_office($link,$id_office){
    $query ="DELETE FROM office WHERE id_office = '$id_office'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}
function change_office($link,$id_office,$name_new,$comfort_new,$place_new,$rent_new){
    $query ="UPDATE office SET name='$name_new', comfort='$comfort_new', place='$place_new', rent='$rent_new' WHERE id_office='$id_office'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
}

// закрываем подключение
mysqli_close($link);
?>