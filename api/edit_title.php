<?php
include_once "db.php";

foreach($_POST['id'] as $key => $id){
    if(isset($_POST['del']) && in_array($id, $_POST['del'])){
        $Title->del($id);
    }else{
        $row=$Title->find($id);
        dd($row);
        $row['text']=$_POST['text'][$key]; //改資料庫內容
        $row['sh']=($_POST['sh']==$id)?1:0; //有被選到=1;沒被選到=0;
        $Title->save($row); //$row 有id ，所以是更新內容(不是新增內容)
        dd($row);
    }
}

to("../backend.php?do=title");



?>