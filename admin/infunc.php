<?php
    function insertAdminData($table,$array){
        global $connect;

        $keys = implode(",",array_keys($array));
        $values = implode("','",array_values($array));

        $sql = "insert into $table($keys) values ('$values')";

        $query = mysqli_query($connect,$sql);

        if($query){
            echo "<script>window.open('insert.php','_self')</script>";
        }
    }
?>