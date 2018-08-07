<?php
function postFunction($url,$data){
  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded",
      'method'  => 'POST',
      'content' => http_build_query($data),
    ),
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);

  return $result;
}
function postFunction2($url,$postData){
  $cookieFile = "cookies.txt";
    // if(!file_exists($cookieFile)) {
    //   $fh = fopen($cookieFile, "w");
    //   fwrite($fh, "");
    //   fclose($fh);
    // }
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_POST, TRUE);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
  curl_setopt($ch, CURLOPT_COOKIESESSION, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile); // Cookie aware
  curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile); // Cookie aware
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   // curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}


function curl_get_contents($url){
  $cookieFile = "cookies.txt";
    // if(!file_exists($cookieFile)) {
    //   $fh = fopen($cookieFile, "w");
    //   fwrite($fh, "");
    //   fclose($fh);
    // }

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_COOKIESESSION, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile); // Cookie aware
  curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile); // Cookie aware
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

  $data = curl_exec($ch);
  curl_close($ch);
  // die();
  return $data;
}
?>
