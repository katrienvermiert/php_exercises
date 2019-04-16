<?php
//add ?name=Kees&age=42 in url after supglobals.php
    if(isset($_GET['name'], $_GET['age'])){
        echo 'Hey there '.$_GET['name'].', You are '.$_GET['age'].' years old.';
    }else{
        echo 'One of the required GET variables does not exist';
    }
    echo "<hr>";

    echo '<pre>'.print_r($_SERVER, true).'</pre>';
    echo "<hr>";
    
    // Every page where we use sessions starts with session_start()
    session_start();
    // Declaration of session variables
    $sName = 'Kees';
    $_SESSION['name'] = $sName;
    $_SESSION['age'] = 42;
    // Reading out the session variable
    echo 'Hey there '.$_SESSION['name'].', You are '.$_SESSION['age'].' years old';
    echo "<hr>";
?>