<?php

if($_POST['pin'] && $_POST['durum']){
    $pin = str_replace("pin", "", $_POST['pin']);
    $durum = $_POST['durum'];
    print $pin . " nolu pin durumu değiştirildi";
    $json_file = file_get_contents("pins.json");
    $json = json_decode($json_file, true);
    $json['pinler'][$pin]['durum'] = $durum;
    file_put_contents("pins.json", json_encode($json, TRUE));
}else{
    $json_file = file_get_contents("pins.json");
    $json = json_decode($json_file, true);
    for($i = 0; $i <= count($json['pinler']); $i++){
        $pins = ['03','05','07','08','10','11','12','13','15','16','18','19','21','22','23','24','26','27','28','29','31','32','33','35','36','37','38','40'];
        if($json['pinler'][$pins[$i]]['durum'] == "acik"){
            print $pins[$i] . ",";
        }
    }
}



?>
