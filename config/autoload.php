<?php
function __autoload($class_name)
{
    $filename = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name)).'.php';
    $file = $filename;
    echo "classname = $class_name<br />";

    // class doesn't exists return false
    if ( !file_exists($file)) {
        return false;
    }

    // class exists, include class file
    include_once ($file);
}
