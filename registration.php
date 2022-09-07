 <?php
if (!empty($_POST['submit'])) {
    session_start();
    $error = array();

    if(isset($_POST['fname']) && empty($_POST['fname'])) {
        $error['fname'] = "This field is required";
    }

    if(isset($_POST['lname']) && empty($_POST['lname'])) {
        $error['lname'] = "This field is required";
    }
    
    if (!empty($error)) {
        $_SESSION['error'] = $error;
        header('location:signup.php');
    } else {

        if (!empty($_SESSION['error'])) {  
            session_unset($_SESSION['error']);
        }
        
        $user_count = isset($_SESSION['User'])? count($_SESSION['User']): 0;
        $_POST['id'] = $user_count+1;
        $_SESSION['User'][] = $_POST;

        echo "User  created sucessfully";
    }

}
?>