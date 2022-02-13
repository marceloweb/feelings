<?php


$medo = "
<iframe id=\"videoMedo\" class=\"yt_player_iframe\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PQeBntSQdoQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
";

$tristeza = "
<iframe id=\"videoTristeza\"  class=\"yt_player_iframe\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qlHmsmQXIbQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
";


$vergonha = "
<iframe id=\"videoVergonha\"  class=\"yt_player_iframe\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5i9g5VRaHEA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
";


$data = array("data" => array(
	array("feeling" => "Medo", "text" => $medo), 
	array("feeling" => "Tristeza","text" => $tristeza), 
	array("feeling" => "Vergonha", "text" => $vergonha)
));
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
