<?php
use myfrm\Db;
use myfrm\App;

$db = App::get(Db::class);
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();

$insectClass=[];
foreach($category as $item){
  $insectClass[$item['category']] = ($item['id']);

}



// $insectClass = [
//     'all' => '0',
//     'Lepidoptera' => '1',
//     'Coleoptera' => '2',
//     'Odonata'=>'3',
//     'Diptera'=>'4',
//     'Orthoptera'=>'5',
//     'Hymenoptera'=>'6',
//     'Mantodea'=>'7',
//     'Siphonaptera'=>'8',
//     'Megaloptera'=>'9',
//     'Strepsiptera'=>'10',
//     'Raphidioptera'=>'11',
//     'Plecoptera'=>'12',
//     'Archaeognatha'=>'13',
//     'Zoraptera'=>'14',
//     'Dermaptera'=>'15',
//     'Ephemeroptera'=>'16',
//     'Hemiptera'=>'17',
//     'Phasmatodea'=>'18',
//     'Phthiraptera'=>'19',
//     'Trichoptera'=>'20',
//     'Psocoptera'=>'21',
//     'Mecoptera'=>'22',
//     'Blattodea'=>'23',
//     'Neuroptera'=>'24',
//     'Notoptera'=>'25',
//     'Thysanoptera'=>'26',
//     'Zygentoma'=>'27',
//     'Embioptera'=>'28',
//     'php'=>'100',
//     'new'=>'108',
//     'admin1'=>'110',
//     'admin2'=>'111',
// ];
// print_arr($insectClass);