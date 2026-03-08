<?php

    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

?>
<html>
<!-- the head section -->
<head>
    <title>The Family Tree</title>  
       <base href="http://localhost:8080/FamilyTree/">
        
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    
</head>

<!-- the body section -->
<body>
    <main>

<header>
    <h1 id="header">The Family Tree</h1>
</header>
        <ul id="header_ul">
            <li>
                <a href="index.php" >Home</a>
            </li>
            <li>
                <a href="user_manager/index.php?controllerRequest=login_user">Login</a>
            </li>
            <li>
                <a href="user_manager/index.php?controllerRequest=register_user">Register</a>
            </li>
            <li>
                <a href="user_manager/index.php?controllerRequest=logout_user">Logout</a>
            </li>   
        </ul>
        
    
     