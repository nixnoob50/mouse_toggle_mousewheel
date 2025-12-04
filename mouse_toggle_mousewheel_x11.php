#! /usr/bin/php
<?php
  print "Getting mouse input id.\n";
  exec('xinput | grep "Mouse"',$result);
  if(empty($result)){
    print "Error: No results from xinput.\n";
    exit(0);
  }

  preg_match("/\sid=(\d+)\s/",$result[0],$matches);
  if(empty($matches)){
    print "Error: Couldn't get mouse id.\n";
    exit(0);
  }
  $mouse_id = $matches[1];
  
  print "Mouse ID: $mouse_id \n";

  exec("xinput get-button-map $mouse_id",$btn_result);
  //print_r($btn_result);
  if(empty($btn_result)){
    print "Error: Couldn't get button map.\n";
    exit(0);
  }
  $button_map = explode(" ",$btn_result[0]);
  //print_r($button_map);
 
  if($button_map[1] == 2){
    $button_map[1] = 0;
  }
  else{
    $button_map[1] = 2;
  }
  $button_map_string = implode(" ",$button_map);
  //print($button_map_string);
  exec("xinput set-button-map $mouse_id $button_map_string");
  if($button_map[1] == 0){
    print "Mousewheel Disabled\n";
  }
  else{
    print "Mousewheel Enabled\n";
  }
?>
