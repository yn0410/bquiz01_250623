<?php
    $str=[
        'title'=>[
            'header'=>'更新標題區圖片',
            'label'=>'標題區圖片'
        ],
        'mvim'=>[
            'header'=>'更新動畫圖片',
            'label'=>'動畫圖片'
        ],
        'image'=>[
            'header'=>'更新校園映像圖片',
            'label'=>'校園映像圖片'
            ]
        ];
        /* switch($_GET['table']){
            case 'title':
                echo "更新標題區圖片";
                break;
            case 'mvim':
                echo "更新動畫圖片";
                break;
            case 'image':
                echo "更新校園映像圖片";
                break;
            } */
?>
    
<h3 style="text-align: center;">
    <!-- echo $str[$_GET['table']]['header']; -->
    <?=$str[$_GET['table']]['header'];?>
</h3>
<hr>
<form action="./api/update.php" method='post' enctype="multipart/form-data">
    <div>
        <label>
            <?=$str[$_GET['table']]['label'];?>
        </label>
        <input type="file" name="img">
    </div>
    <div>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>