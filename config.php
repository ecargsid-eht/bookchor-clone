<?php 

    session_start();
    const SERVER = "localhost";
    const USER = "root";
    const PASS = "";
    const DB = "assignment";

    $connect = mysqli_connect(SERVER, USER, PASS, DB) or die("DB connection failed");

    


    function insertData($table,$array){
        global $connect;

        $keys = implode(",",array_keys($array));
        $values = implode("','",array_values($array));

        $sql = "insert into $table($keys) values ('$values')";

        $query = mysqli_query($connect,$sql);

        if($query){
            echo "<script>window.open('index.php','_self')</script>";
        }
    }

    function callData($table){
        global $connect;

        $array = [];
        $sql = "select * from $table";
        $query = mysqli_query($connect,$sql);

        while($row = mysqli_fetch_array($query)){
            $array[] = $row;
        }

        return $array;
    }

    function singleDataView($table,$cond){
        global $connect;
        $sql = "select * from $table where $cond";
        $query = mysqli_query($connect,$sql);

        $row = mysqli_fetch_array($query);

        return $row;
    }

?>