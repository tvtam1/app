<?php
class User
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public  function insertIntoUser($params = null, $table = "user"){
        if ($this->db->con != null){
            if ($params != null){
                $columns = implode(',', array_keys($params));
                $values = implode(',' , array_values($params));
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    public  function addToUser($fn, $ln){
                                           echo '<script>';
     echo 'console.log('. json_encode('haha', JSON_HEX_TAG) .')';
   echo '</script>';
        if (isset($fn) && isset($ln)){
            $params = array(
                "fname" => $fn,
                "lname" => $ln
            );
            $result = $this->insertIntoUser($params);
            // if ($result){
            //     // Reload Page
            //     // header("Location: " . $_SERVER['PHP_SELF']);
            // }
        }
    }

    // delete cart item using cart item id
    // public function deleteCart($item_id = null, $table = 'cart'){
    //     if($item_id != null){
    //         $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
    //         if($result){
    //             header("Location:" . $_SERVER['PHP_SELF']);
    //         }
    //         return $result;
    //     }
    // }

    // // calculate sub total
    // public function getSum($arr){
    //     if(isset($arr)){
    //         $sum = 0;
    //         foreach ($arr as $item){
    //             $sum += intval($item[0]);
    //         }
    //         return sprintf('%d' , $sum);
    //     }
    // }

    // // get item_it of shopping cart list
    // public function getCartId($cartArray = null, $key = "item_id"){
    //     if ($cartArray != null){
    //         $cart_id = array_map(function ($value) use($key){
    //             return $value[$key];
    //         }, $cartArray);
    //         return $cart_id;
    //     }
    // }



}