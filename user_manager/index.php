<?php

require_once('../model/database.php');
require_once('../model/AncestorDb.php');

if(session_status() === PHP_SESSION_NONE){
    $lifetime = 60 * 60 * 24 *14;
    session_set_cookie_params($lifetime, '/');
    require_once('../model/Ancestor.php');
    session_start();
}

// Get the data from either the GET or POST collection.
$controllerChoice = filter_input(INPUT_POST, 'controllerRequest');
if ( $controllerChoice == NULL) {
     $controllerChoice = filter_input(INPUT_GET, 'controllerRequest');
    if ( $controllerChoice == NULL) {
         $controllerChoice = 'Not-Set (Null)';
    }
}  

if($controllerChoice == 'login_user'){
    $errorMessage = "";
    $email_cookie = $_COOKIE['email'] ?? '';
    $password_cookie = $_COOKIE['password'] ?? '';
    require_once("user_login.php");
}

else if($controllerChoice == 'validate_login'){

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if ($email == null || $password == null) {
        $validLogin = filter_input(INPUT_GET, 'validLogin');
        $errorMessage = "Please enter a valid email and password";
        include('user_login.php');
    } 
    else {
      $user = AncestorDB::get_ancestor_by_email_login($email,$password);
        if ($user !== false) {
            // Login successful
            $login_message = "Login Successful";

            $_SESSION['user'] = $user;
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_first_name'] = $user->getFirstName();

            $cookie_lifetime = 60 * 60 * 24 * 14;
            setcookie('email', $email, time() + $cookie_lifetime, "/");
            setcookie('password', $password, time() +  $cookie_lifetime, "/");

            header("Location: index.php");
            exit();

        } else {
            // Login failed
            $errorMessage = "Incorrect email or password";
            include('user_login.php');
        }
    }
}

/* else if ($controllerChoice == 'add_user'){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    //validate
    if($firstName == null || $lastName == null || $address == null || $city == null ||
        $state == null || $zip == null || $email == null || $password == null || $phone == null){
        $errorMessage = "Please fill out the full form. Thank you.";
        include('user_add.php');
        exit();
    }else{
        $newUser = new Ancestor();
        $newUser->setFirstName($firstName);
        $newUser->setLastName($lastName);
        $newUser->setAddress($address);
        $newUser->setCity($city);
        $newUser->setState($state);
        $newUser->setZip($zip);
        $newUser->setEmail($email);
        $newUser->setPassword($password);
        $newUser->setPhone($phone);

        AncestorDb::add_user($newUser);
        $user = AncestorDb::get_ancestor_by_email_login($email, $password);
        include("user_register.php");
    }
}

else if ($controllerChoice == 'register_user'){
    $errorMessage = "";
    include("user_add.php");
}

else if ($controllerChoice == 'edit_user'){
    $errorMessage = "";
    $id = filter_input(INPUT_POST, 'user_id', FILTER_VALIDATE_INT);
    if (!$id) {
        $id = filter_input(INPUT_GET, 'user_id', FILTER_VALIDATE_INT);
    }

    if (!$id) {
        die("No user_id provided.");
    }
    $user = AncestorDB::get_ancestor_by_id($id);
    
    if (!$user) {
        die("User not found.");
    }
    include("user_edit.php");
}

else if($controllerChoice == 'update_user'){
    $id= filter_input(INPUT_POST, 'user_id', FILTER_VALIDATE_INT);
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip = filter_input(INPUT_POST, 'zip');
    $phone = filter_input(INPUT_POST, 'phone');
    $userRoleId = filter_input(INPUT_POST, 'user_role_id');
    $isActive = filter_input(INPUT_POST, 'isActive', FILTER_VALIDATE_INT);
    $isActive = ($isActive == 'on' || $isActive == '1') ? 1 : 0;

    $user = new Ancestor();
    $user->setID($id); 
    $user->setFirstName($firstName);
    $user->setLastName($lastName);
    $user->setAddress($address);
    $user->setCity($city);
    $user->setState($state);
    $user->setZip($zip);
    $user->setPhone($phone);
    $user->setEmail($email);
    $user->setPassword($password);
    $user->setUserRoleId($userRoleId);
    $user->setIsActive($isActive);
    
    AncestorDB::update_ancestor($user);
    
    $errorMessage = '';
    $users = AncestorDB::get_ancestor(); 
    include("user_list.php");
} */

else if($controllerChoice == 'logout_user'){
    session_destroy();
    $_SESSION = array(); 
    $errorMessage = $errorMessage ?? '';
    header("Location: ../index.php"); 
    exit;
}

?>