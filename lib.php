<?php
/**
 * Created by PhpStorm.
 * User: izap
 * Date: 5/19/17
 * Time: 5:30 PM
 */

function gateway(){
    if(!isset($_SESSION[session_id()])){
        header("Location: login.php?error_message=You are not authorized to access this page");
        exit;
   }
    return $_SESSION[session_id()];
}

/**
 *  to print formated array
 */
function see($var = array()){

    echo "<pre>";
    print_r($var);
    echo "</pre>";
}