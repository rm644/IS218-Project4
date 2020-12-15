<?php
class UserController extends Controller {
    public function __construct() {
       $this->userModel = $this->model('User');
    }

    public function register(){
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $strResult = '';
        $isValidForm = true;

        if(strlen(trim($email)) == 0){
            $isValidForm = false;
            $strResult .= 'Email is empty<br/>';
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $isValidForm = false;
            $strResult .= 'Email is invalid<br/>';
        }

        if( !preg_match( '/[^A-Za-z0-9]+/', $password) || strlen( $password) < 8){
            $isValidForm = false;
            $strResult .= 'Password is invalid <br/>';
        }

        if($isValidForm){
            echo "Here is your posted data<br/>";
            echo "$email, $password";
        }else
            echo $strResult;
        
        $password = md5($password);   //if no encryption comment out
        //$sql = "INSERT id FROM users WHERE email = '$email' AND password = '$password'";
        //echo $sql;

        $user = $this->userModel->findByEmail($email);

        if (isset($user)){
            echo "Email already taken<br>";
            echo "<a href='../page/register'>Back</a>";
        }
        else {
            $user = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password
        );

        $this->userModel->save($user);

            echo "Registered Successfully<br>";
            echo "<a href='../page/login'>Login Here</a>";

        }
        //$this->view('pages/registered', $data);
    }

    public function login(){
        $email = $_REQUEST['email'];
        $password = md5($_REQUEST['password']);

        $user = $this->userModel->login($email, $password);

        if(isset($user)){
            $name = $user->first_name;

	        if(isset($user->last_name))
                $name = $name . ', ' . $user->last_name;
        
            $_SESSION['user_id'] = $user->id;
            $_SESSION['name'] = $name;

            header('location:../question/list');
        }
        else{
            $this->view('pages/loginfailed');
        } 
    }

    public function logout(){
        $_SESSION['user_id'] = null;
        $_SESSION['name'] = null;
        header('location:../page/index');
    }    
}
?>