<?php 
    /*
        PHP include and require Statements
        require will produce a fatal error (E_COMPILE_ERROR) and stop the script
        include will only produce a warning (E_WARNING) and the script will continue
    
        include 'filename';
        require 'filename'
    */
    echo '<a href="/default.asp">Home</a> -
    <a href="/html/default.asp">HTML Tutorial</a> -
    <a href="/css/default.asp">CSS Tutorial</a> -
    <a href="/js/default.asp">JavaScript Tutorial</a> -
    <a href="default.asp">PHP Tutorial</a>';
?>