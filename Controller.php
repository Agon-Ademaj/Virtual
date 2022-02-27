<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'virtual');

class Controller {
    function __construct()
    {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this -> db = $connection;
    }

    function register($userfullname, $username, $useremail, $userpass, $usertype) 
    {
        $query = mysqli_query($this->db, "INSERT INTO user(userfullname, username, useremail, userpass, usertype)
            VALUES ('$userfullname', '$username', '$useremail', '$userpass', '$usertype')");
       
       return $query;
    }

    public function login($username, $userpass) {
        $result = mysqli_query($this->db, "SELECT userid, usertype, userfullname FROM user 
            WHERE username = '$username' AND userpass = '$userpass'");

        return $result;
    }

    public function insertProducts($productimg, $productname, $productprice) {
        $query = mysqli_query($this->db, "INSERT INTO products(productimage, productname, productprice)
            VALUES ('$productimg', '$productname', '$productprice')");
        
        return $query;
    }

    public function readProducts() {
        $query = mysqli_query($this->db, "SELECT * FROM products");
        return $query;
    }

    public function insertBuyers($userbuyid, $productimg, $productname, $productprice) {
        $query = mysqli_query($this->db, "INSERT INTO buy (userbuyid, productimg, productname, productprice)
            VALUES ('$userbuyid', '$productimg', '$productname', '$productprice')");

        return $query;
    }

    public function readBuyers($userid) {
        $query = mysqli_query($this->db, "SELECT * FROM buy WHERE userbuyid = '$userid'");
        return $query;
    }

    public function allBuyers() {
        $query = mysqli_query($this->db, "SELECT * FROM buy b JOIN user u
            ON b.userbuyid = u.userid");
        return $query;
    }

    public function insertEmployee($employeimg, $employename, $employerole, $employedesc) {
        $query = mysqli_query($this->db, "INSERT INTO leadership(employeimg, employename, employerole, employedesc)
            VALUES ('$employeimg', '$employename', '$employerole', '$employedesc')");
        return $query;
    }

    public function showEmployee() {
        $query = mysqli_query($this->db, "SELECT * FROM leadership");
        return $query;
    }

    public function deleteProd($prodid) {
        $query = mysqli_query($this->db, "DELETE FROM products WHERE productsid = '$prodid'");
        return $query;
    }

    public function deleteEmp($empid) {
        $query = mysqli_query($this->db, "DELETE FROM leadership WHERE employeid = '$empid'");
        return $query;
    }

    // count
    public function countProducts() {
        $query = mysqli_query($this->db, "SELECT COUNT(productsid) FROM products");
        return mysqli_fetch_row($query);
    }

    public function countBuyers() {
        $query = mysqli_query($this->db, "SELECT COUNT(buyid) FROM buy");
        return mysqli_fetch_row($query);
    }

    public function countUsers() {
        $query = mysqli_query($this->db, "SELECT COUNT(userid) FROM user");
        return mysqli_fetch_row($query);
    }

    public function countEmployee() {
        $query = mysqli_query($this->db, "SELECT COUNT(employeid) FROM leadership");
        return mysqli_fetch_row($query);
    }

}

?>