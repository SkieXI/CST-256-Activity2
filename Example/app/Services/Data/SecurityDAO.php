<?php
namespace App\Services\Data;

use App\Models\UserModel;


class SecurityDAO
{
    public $db;
    private $DBServer = "localhost";
    private $DBUser = "root";
    private $DBpassword ="root";
    private $DBName = "activity2";
    private $conn;
    function dbConn()
    {
        
        //$conn = new mysqli("localhost", "root", "root", "test");
        $conn = mysqli_connect($this->DBServer, $this->DBUser, $this->DBpassword, $this->DBName);
        if ($conn->connect_error) {
            echo "Failed";
        }
        return $conn;
    }
    
    public function findbyUser(UserModel $user)
    {
        $this->conn = $this->dbConn();
        $username = $user->getUserName();
        $conn = $this->conn;
        
        $sql = ("SELECT * FROM USERS WHERE USERNAME = '$username'");
        
        //$sql->execute();
        echo $sql;
        
        $result = $this->conn->query($sql);
        
        //echo $result;
        $index = 0;
        $users = array();
        //Returning false instead of a number.
        while ($row = $result->fetch_assoc()) {
            
            $users[$index] = array($row["ID"], $row["USERNAME"], $row["PASSWORD"]);
            ++$index;
        }
        $conn-> close();
        return $users;
        
        //Use Regular PHP Code.
//         if($user = DB::table('users')->where('username', UserModel::username)->first())
//         {
//         echo $user->name;
//         return true;
//         }
//         return false;

    }
}

