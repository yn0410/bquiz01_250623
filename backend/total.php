<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" action="./api/edit.php">
        <?php
        $rows=${ucfirst($do)}->all();
        ?>
        <label style="background:#F3DA49;">進站總人數：</label>
        <input type="text" name="" id="" value="0">
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?= $do;?>">
                    <td class="cent">
                        <input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>