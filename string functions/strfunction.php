<?php
    // Will return the length of givin string
    echo strlen("Welcome to CloudWays"); 
    echo '<hr>';

    // Will return the number of words in given string
    echo str_word_count("Welcome to CloudWays"); 
    echo '<hr>';

    // Will return the given string starting from the end
    echo strrev("Welcome to CloudWays"); 
    echo '<hr>';

    // Will return the given string starting from the end
    echo strpos("Welcome to CloudWays", "CloudWays");
    echo '<hr>';

    // Will return the given string starting from the end
    echo str_replace("CloudWays", "the programming world!","Welcome to CloudWays");
    echo '<hr>';

    // Will return the given string starting from the end
    echo ucwords("Welcome to the php world");
    echo '<hr>';

    // Will return the given string starting from the end
    echo strtoupper("Welcome to CloudWays"); 
    echo '<hr>';

    // Will return the given string starting from the end
    echo strtolower("WELCOME TO CLOUDWAYS"); 
    echo '<hr>';

    // Will return the given string starting from the end
    echo str_repeat("=", 13);
    echo '<hr>';

    echo strcmp("cloudways","CLOUDWAYS"). "<br>";
   
    //Both the strings are equal
    echo strcmp("cloudways","cloudways")."<br>";

    echo strcmp("Cloudways","Hosting")."<br>";
   
    //compares alphabetically
    echo strcmp("a","b")."<br>";
  
    //compares both strings and returns the result in terms of number of characters.
    echo strcmp("abb baa","abb baa caa");
    echo "<hr>";

    echo substr("Welcome to Cloudways",6)."<br>";
    echo substr("Welcome to Cloudways",0,10);
    echo "<hr>";

    $str = "Wordpess Hosting";
    echo $str . "<br>";
    echo trim($str,"Wording");
    echo "<hr>";
;?>