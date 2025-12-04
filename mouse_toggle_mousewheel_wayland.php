#! /usr/bin/php
<?php
    /*
     * Requires wl-clipboard
     * sudo apt-get install wl-clipboard
     */

    // Check if mousewheel is already disabled
    $mw_off = exec('ps -Al | grep wl-paste');
    if(empty($mw_off)){
        // mousewheel is not disabled so disable it
        exec("wl-paste -p --watch wl-copy -p '' > /dev/null 2>&1 &");
        echo "mouse disabled\n";
    }
    else{
        // mousewheel is disabled so enable it
        exec("killall wl-paste");
        echo "mouse enabled\n";
    }

