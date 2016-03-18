<?php
if(isset($_POST["penyiram"])) {


    $Kode= $_POST["penyiram"];

    if($Kode == '1'){
        echo "checked";
    }else($Kode == !'0'){
        echo "unchecked";
    }

?>