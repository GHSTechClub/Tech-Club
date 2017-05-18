<?php 
function find_all_files($dir) 
{ 
    $root = scandir($dir); 
    foreach($root as $value) 
    {
        if($value === '.' || $value === '..') {continue;}
        if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;}
        foreach(find_all_files("$dir/$value") as $value) 
        {
            $result[]=$value; 
        }
    }
    return $result; 
} 
?>