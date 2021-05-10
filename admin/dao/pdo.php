<?php
    function pdo_get_connection(){
//         if(isset(getenv('JAWSDB_URL'))){
//             $url = getenv('JAWSDB_URL');
// $dbparts = parse_url($url);

// $hostname = $dbparts['host'];
// $username = $dbparts['user'];
// $password = $dbparts['pass'];
// $database = ltrim($dbparts['path'],'/');
// $conn = mysqli_connect($hostname, $username, $password, $database);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connection was successfully established!";
//         } else
//         {
        // $pdo = new PDO("mysql:host=localhost;dbname=bigshoes",'root','');
        $pdo = new PDO("mysql:host=wcwimj6zu5aaddlj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=i39ofxadpc39r225",'jq8o2jhf7i5qgt0a','rv118na9f99comeb');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        // }
        // mysql -h host=wcwimj6zu5aaddlj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com -u jq8o2jhf7i5qgt0a -prv118na9f99comeb i39ofxadpc39r225 < bigshoes.sql
    }

    function pdo_execute($sql){//thêm dữ liệu
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn -> prepare($sql);
            $stmt -> execute($sql_args);
        }catch(PDOException $e){
            throw $e;
        }finally{
            unset($conn);
        }
    }

    function pdo_query($sql){ // hàm truy xuất dữ liệu về mảng
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn ->prepare($sql);
            $stmt -> execute($sql_args);
            $rows = $stmt -> fetchAll();
            return $rows;
        }catch(PDOException $e){
            throw $e;
        }finally{
            unset($conn);
        }
    }

    function pdo_query_one($sql){ // trả về 1 hàng dữ liệu
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn ->prepare($sql);
            $stmt -> execute($sql_args);
            $row = $stmt -> fetch();
            return $row;
        }catch(PDOException $e){
            throw $e;
        }finally{
            unset($conn);
        }
    }

    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt ->fetch();
            return array_values($row)[0];
        }catch(PDOException $e){
            throw $e;
        }finally{
            unset($conn);
        }
    }

    function save_file($fieldname, $target_dir){
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded["name"]);
        $target_path = $target_dir . $file_name;
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    }

    function check_login(){
        if(!isset($_SESSION['user'])){      
            header("location: /app/tai-khoan/dang-nhap.php");
        }
    }
    
    ?>

