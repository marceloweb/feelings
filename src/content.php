<?php

function CallAPI($url)
{
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}

$content = CallAPI("https://marceloweb.info/sentimentos/api/");
return json_decode($content);
?>i
