<?php
//echo ini_get("memory_limit"); Default is 128M

ini_set('memory_limit','16M');
echo 'ini_set(\'memory_limit\',\'16M\') => ' . ini_get("memory_limit") . '<br>';
ini_set('memory_limit','128M');
echo 'ini_set(\'memory_limit\',\'128M\') => ' . ini_get("memory_limit");