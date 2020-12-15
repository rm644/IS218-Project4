<?php
    class Question{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function find($id){
            $sql = "SELECT id, name, body, skills FROM questions WHERE id = $id";
            
            $this->db->query($sql);
            $rows = $this->db->resultSet();
            
            if(isset($rows) && count($rows) > 0)
                return $rows[0];  
            else
                return null;  
        }

        public function save($question){
            $sql = "insert into questions(user_id, name, body, skills) values(" . $question['user_id'] . ", '" . $question['name'] . "', '" . $question['body'] . "', '" . $question['skills'] . "')";

            $this->db->query($sql);

            $this->db->execute();
        }

        public function loadForUser($user_id, $mode){
            if(isset($mode) && $mode == 'all')
                $sql = "SELECT id, name, body, skills FROM questions";
            else
                $sql = "SELECT id, name, body, skills FROM questions WHERE user_id = $user_id";
            
            $this->db->query($sql);
            $rows = $this->db->resultSet();

            return $rows;            
        }

        public function update($id, $question){
            $sql = "update questions set name='" . $question['name'] . "', body='" . $question['body'] . "', skills='" . $question['skills'] . "' where id=$id";
            //$sql = "update questions set name = 'name, body = :body, skills = :skills where id = :id";
            echo $sql;

            $this->db->query($sql); 
            /*$this->db->bind(":name", $question['name'], PDO::PARAM_STR);
            $this->db->bind(":body", $question['body'], PDO::PARAM_STR);
            $this->db->bind(":skills", $question['skills'], PDO::PARAM_STR);
            $this->db->bind(":id", $id, PDO::PARAM_INT);*/

            $this->db->execute();
        }

        public function delete($id){
            $sql = "delete from questions where id = $id";

            $this->db->query($sql);

            $this->db->execute();
        }
    }
?>