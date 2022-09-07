<!-- <?php
// if(!empty($_POST["submit"]))
// {
//     session_start();
//     $error= array();

//     if(isset( $_POST["name"]) && empty($_POST["name"]))
//     {
//         $error["name"]= "required";
//     }
//     if(isset($_POST["password"]) && empty($_POST["password"]))
//     {
//         $error["password"]= "required";
//     }
//     if(!empty($error))
//     {
//         $_SESSION["error"]= $error;
//         header ("location: login.php");
//     }
//     else
//     {
//         if(!empty($_SESSION["error"]))
//         {
//             print_r($_SESSION);
//             unset($_SESSION["error"]);
//         }
//         $user_id = isset($_SESSION['User'])? count($_SESSION['User']): 0;
//         $_POST['id'] = $user_id+1;
//         $_SESSION['User'][] = $_POST;
//         echo "<pre>";
//         print_r ($_SESSION);
//         echo "</pre>";
//         echo "login successfully";    

//     }

// }

?> -->