<?php
    class Answer{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function save($answer){
            $sql = "insert into answers(question_id, user_id, answer, create_date) values(" . $answer['question_id'] . ", " . $answer['user_id'] . ", '" . $answer['answer'] . "', '" . $answer['create_date'] . "')";
            echo $sql;
            print_r($answer);

            $this->db->query($sql);

            $this->db->execute();
        }

        public function upVote($id){
            $sql = "update answers set up_vote = up_vote+1 where id=$id";
            
            print_r($answer);

            $this->db->query($sql);

            $this->db->execute();
        }

        public function downVote($id){
            $sql = "update answers set down_vote = down_vote+1 where id=$id";

            $this->db->query($sql);

            $this->db->execute();
        }

        public function newAnswer($answer){
            $sql = "insert into answers(question_id, user_id, answer, create_date) values(" . $answer['question_id'] . ", " . $answer['user_id'] . ", '" . $answer['answer'] . "', '" . $answer['create_date'] . "')";

            $this->db->query($sql);

            $this->db->execute();
        }


        public function getAnswers($question_id, $user_id, $mode){
            if(isset($mode) && $mode == 'all')
                $sql = "SELECT answers.id, user_id, question_id, first_name, last_name, answer, create_date, down_vote, up_vote FROM answers left join users on users.id = answers.user_id where question_id = $question_id order by up_vote";
            else
                $sql = "select answers.id, user_id, question_id, first_name, last_name, answer, create_date, down_vote, up_vote from answers 
                left join users on users.id = answers.user_id 
                where user_id = $user_id and question_id = $question_id order by up_vote";
         
            $this->db->query($sql);
            $rows = $this->db->resultSet();

            return $rows;      
        }
    }
?>