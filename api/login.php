<?php
// 檢查使用者輸入的帳號密碼
include_once 'db.php';

// 方法一 寫死的(只認帳號=admin/密碼=1234)
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    to("../backend.php"); //後端執行的
}else{
    echo "<script>alert('帳號或密碼錯誤'); location.replace('../index.php?do=login');</script>"; //前端執行
    // 不能這樣寫
    //echo "<script>alert('帳號或密碼錯誤');</script>"; //前端執行
    //to("../index.php?do=login"); //後端執行的
}
?>