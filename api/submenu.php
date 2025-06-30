<?php include_once 'db.php';
$main_id=$_POST['id'];

if(isset($_POST['text2'])){
    foreach($_POST['text2'] as $key => $text){
        if($text!=""){
            $href=$_POST['href2'][$key];
            $Menu->save(['text'=>$text,
                        'href'=>$href,
                        'main_id'=>$main_id,
                        'sh'=>1]);
        }
    }
}

to("../backend.php?do=menu");

?>