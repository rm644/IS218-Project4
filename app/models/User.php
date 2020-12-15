<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function find($id){
            $sql = "SELECT first_name, last_name, email, password FROM users WHERE id = $id";
            
            $this->db->query($sql);
            $rows = $this->db->resultSet();
            
            if(isset($rows) && count($rows) > 0)
                return $rows[0];  
            else
                return null;  
        }

        public function login($email, $password){
            $sql = "SELECT id, first_name, last_name, email, password FROM users WHERE email = '$email' AND password = '$password'";

            $this->db->query($sql);
            $rows = $this->db->resultSet();
            
            if(isset($rows) && count($rows) > 0)
                return $rows[0];  
            else
                return null;  
        }

        public function findByEmail($email){
            $sql = "SELECT id, first_name, last_name, email FROM users WHERE email = '$email'";

            $this->db->query($sql);
            $rows = $this->db->resultSet();
            
            if(isset($rows) && count($rows) > 0)
                return $rows[0];  
            else
                return null;  
        }

        public function save($user){
            $sql = "insert into users(first_name, last_name, email, password) values('" . $user['first_name'] . "', '" . $user['last_name'] . "', '" . $user['email'] . "', '" . $user['password'] . "')";
            //$sql = "insert into users (first_name, last_name, email, password) values ( :first_name, :last_name, :email, :password)";
            echo $sql;

            $this->db->query($sql);
            /*$this->db->bind(":first_name", $user['first_name'], PDO::PARAM_INT); 
            $this->db->bind(":last_name", $user['last_name'], PDO::PARAM_STR);
            $this->db->bind(":email", $user['email'], PDO::PARAM_STR);
            $this->db->bind(":password", md5($user['password']), PDO::PARAM_STR);*/

            $this->db->execute();
        }

        public function update($id, $user){
            $sql = "update users set first_name = :first_name, last_name = :last_name, email = :email where id = :id";

            $this->db->query($sql); 
            $this->db->bind(":first_name", $user['first_name'], PDO::PARAM_INT); 
            $this->db->bind(":last_name", $user['last_name'], PDO::PARAM_STR);
            $this->db->bind(":email", $user['email'], PDO::PARAM_STR);
            
            $this->db->bind(":id", $id, PDO::PARAM_INT);

            $this->db->execute();
        }
    }
?>
