<?php
    function loadAllTk(){
        $sql = "SELECT * FROM khachhang";
        $listtk = pdo_query($sql);
        pdo_query($sql);
        return $listtk;
    };

    function loadOneTk($id){
        $sql = "SELECT * FROM khachhang WHERE id= $id";
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    };

    function editTk($email,$diachi,$sdt,$idvaitro,$id){
        $sql = "UPDATE khachhang set email='$email',diachi='$diachi',sdt='$sdt',vaitro='$idvaitro' WHERE id = $id";
        pdo_execute($sql);
        header("location: index.php?act=listtk");
    }

?>