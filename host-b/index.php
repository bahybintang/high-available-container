<?php
    echo "Requested IP\t:" . $_SERVER['SERVER_ADDR'];
    echo "\nLocal IP\t:" . exec("ip addr show eth0 | grep 'inet ' | awk '{print $2}' | cut -d/ -f1");
?>

