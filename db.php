<?php
  function connect(){
    $conf = readConfig();

    return mysql_connect($conf->{'host'}, $conf->{'user'}, $conf->{'pass'});
  }

  function readConfig(){
    $file = fopen("dbconfig.json", "r");
    $json = fread($file, filesize("dbconfig.json"));
    $json = json_decode($json);

    return $json;
  }
?>
