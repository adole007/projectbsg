<?php
require_once(__DIR__ . '/../config/config.php');

foreach (glob(__DIR__ . "/*.php") as $filepath)
{
    //skip this very file
    if ($filepath == __FILE__) continue;
    require_once($filepath);
}

?>
