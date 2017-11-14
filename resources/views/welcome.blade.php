


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	 <?php
 
  Function curl($url){
  
  	$ch=curl_init();
  	curl_setopt($ch, CURLOP_URL, $url);
  	curl_setopt($ch, CURLOP_RETURNTRANSFER, 1);
  	curl_setopt($ch, CURLOP_FOLLOWLOCATION, True);
  	$data=curl_exec($ch);
  	curl_close($ch);

  	return $data;
  }
  if($_GET){
    	
    curl("http://api.openweathermap.org/data/2.5/forecast?q=Amman&APPID=1d542eac83eaad6d439c47ba406ba70e");

    $weatherArray=json_decode($urlContents,True);
    print_r($weatherArray);

	}
 echo "hellow world";

    ?>

<input type="text" name="city" value =""/>
 <button type="submit">submit </button>

<!-- </script> -->
<form action="function curl($url) {

}" 

></form>
</body>
</html>