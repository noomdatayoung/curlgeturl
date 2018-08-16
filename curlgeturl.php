<?
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://freepascl.org/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); //redirect follow
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$my_var = curl_exec($ch);
curl_close($ch);
echo $my_var;
?>