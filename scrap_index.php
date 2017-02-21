<?php

require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->setOptions([
    'enforceEncoding' => 'utf8',
]);

// $index_url = 'http://xybk.fuyin.tv/Bible/NCV/gb/_about/ncvgb.htm';
$index_url = 'sample/index.html';

$dom->load($index_url);


$contents = $dom->find('table table td a');


// 
// INDEX ARRAY CONSTRUCT
// 
$index = [];
foreach ($contents as $key => $value) {

    if (strlen($value->text) < 3)
        break;

    $href = $value->getAttribute('href');
    $eng = explode('/', $href)[1];

    array_push($index, [
            'name' => $value->text,
            'folder' => $eng,
            'url' => str_replace('../', '', $href),
        ]);        


}

// 
// INDEX PHP ARRAY CONSTRUCT
// 

foreach ($index as $book) {
    echo '[';
    echo '"name"' . '=>"' . $book['name'] . '",';
    echo '"folder"' . '=>"' . $book['folder'] . '",';
    echo '"url"' . '=>"' . $book['url'] . '",';
    echo '],';
}

