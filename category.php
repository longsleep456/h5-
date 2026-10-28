<?php

header('Access-Control-Allow-Origin:*');

header('Content-Type:application/json;charset=utf-8');


$cateData = [
    ["id"=>1,"name"=>"国产水果","img"=>"web/img/nav01.png"],
    ["id"=>2,"name"=>"进口水果","img"=>"web/img/nav02.png"],
    ["id"=>3,"name"=>"免费送货区","img"=>"web/img/nav03.png"],
    ["id"=>4,"name"=>"折扣专区","img"=>"web/img/nav04.png"]
];


echo json_encode($cateData,JSON_UNESCAPED_UNICODE);
?>