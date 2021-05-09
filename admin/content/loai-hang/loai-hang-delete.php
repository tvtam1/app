<?php
    require_once ('../../dao/loai-hang.php');

    extract($_REQUEST);

    loai_hang_delete($ma_loai);

    header('location: loai-hang-list.php');

?>