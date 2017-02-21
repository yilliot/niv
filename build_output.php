<?php


$books = [
["name"=>"创世记","folder"=>"gen","url"=>"gen/1.htm",],["name"=>"出埃及记","folder"=>"exo","url"=>"exo/1.htm",],["name"=>"利未记","folder"=>"lev","url"=>"lev/1.htm",],["name"=>"民数记","folder"=>"num","url"=>"num/1.htm",],["name"=>"申命记","folder"=>"deu","url"=>"deu/1.htm",],["name"=>"约书亚记","folder"=>"jos","url"=>"jos/1.htm",],["name"=>"士师记","folder"=>"jdg","url"=>"jdg/1.htm",],["name"=>"路得记","folder"=>"rut","url"=>"rut/1.htm",],["name"=>"撒母耳记上","folder"=>"1sa","url"=>"1sa/1.htm",],["name"=>"撒母耳记下","folder"=>"2sa","url"=>"2sa/1.htm",],["name"=>"列王纪上","folder"=>"1ki","url"=>"1ki/1.htm",],["name"=>"列王纪下","folder"=>"2ki","url"=>"2ki/1.htm",],["name"=>"历代志上","folder"=>"1ch","url"=>"1ch/1.htm",],["name"=>"历代志下","folder"=>"2ch","url"=>"2ch/1.htm",],["name"=>"以斯拉记","folder"=>"ezr","url"=>"ezr/1.htm",],["name"=>"尼希米记","folder"=>"neh","url"=>"neh/1.htm",],["name"=>"以斯帖记","folder"=>"est","url"=>"est/1.htm",],["name"=>"约伯记","folder"=>"job","url"=>"job/1.htm",],["name"=>"诗篇","folder"=>"psa","url"=>"psa/1.htm",],["name"=>"箴言","folder"=>"pro","url"=>"pro/1.htm",],["name"=>"传道书","folder"=>"ecc","url"=>"ecc/1.htm",],["name"=>"雅歌","folder"=>"son","url"=>"son/1.htm",],["name"=>"以赛亚书","folder"=>"isa","url"=>"isa/1.htm",],["name"=>"耶利米书","folder"=>"jer","url"=>"jer/1.htm",],["name"=>"耶利米哀歌","folder"=>"lam","url"=>"lam/1.htm",],["name"=>"以西结书","folder"=>"eze","url"=>"eze/1.htm",],["name"=>"但以理书","folder"=>"dan","url"=>"dan/1.htm",],["name"=>"何西阿书","folder"=>"hos","url"=>"hos/1.htm",],["name"=>"约珥书","folder"=>"joe","url"=>"joe/1.htm",],["name"=>"阿摩司书","folder"=>"amo","url"=>"amo/1.htm",],["name"=>"俄巴底亚书","folder"=>"oba","url"=>"oba/1.htm",],["name"=>"约拿书","folder"=>"jon","url"=>"jon/1.htm",],["name"=>"弥迦书","folder"=>"mic","url"=>"mic/1.htm",],["name"=>"那鸿书","folder"=>"nah","url"=>"nah/1.htm",],["name"=>"哈巴谷书","folder"=>"hab","url"=>"hab/1.htm",],["name"=>"西番雅书","folder"=>"zep","url"=>"zep/1.htm",],["name"=>"哈该书","folder"=>"hag","url"=>"hag/1.htm",],["name"=>"撒迦利亚书","folder"=>"zec","url"=>"zec/1.htm",],["name"=>"玛拉基书","folder"=>"mal","url"=>"mal/1.htm",],["name"=>"马太福音","folder"=>"mat","url"=>"mat/1.htm",],["name"=>"马可福音","folder"=>"mar","url"=>"mar/1.htm",],["name"=>"路加福音","folder"=>"luk","url"=>"luk/1.htm",],["name"=>"约翰福音","folder"=>"joh","url"=>"joh/1.htm",],["name"=>"使徒行传","folder"=>"act","url"=>"act/1.htm",],["name"=>"罗马书","folder"=>"rom","url"=>"rom/1.htm",],["name"=>"哥林多前书","folder"=>"1co","url"=>"1co/1.htm",],["name"=>"哥林多后书","folder"=>"2co","url"=>"2co/1.htm",],["name"=>"加拉太书","folder"=>"gal","url"=>"gal/1.htm",],["name"=>"以弗所书","folder"=>"eph","url"=>"eph/1.htm",],["name"=>"腓立比书","folder"=>"phi","url"=>"phi/1.htm",],["name"=>"歌罗西书","folder"=>"col","url"=>"col/1.htm",],["name"=>"帖撒罗尼迦前书","folder"=>"1th","url"=>"1th/1.htm",],["name"=>"帖撒罗尼迦后书","folder"=>"2th","url"=>"2th/1.htm",],["name"=>"提摩太前书","folder"=>"1ti","url"=>"1ti/1.htm",],["name"=>"提摩太后书","folder"=>"2ti","url"=>"2ti/1.htm",],["name"=>"提多书","folder"=>"tit","url"=>"tit/1.htm",],["name"=>"腓利门书","folder"=>"phm","url"=>"phm/1.htm",],["name"=>"希伯来书","folder"=>"heb","url"=>"heb/1.htm",],["name"=>"雅各书","folder"=>"jam","url"=>"jam/1.htm",],["name"=>"彼得前书","folder"=>"1pe","url"=>"1pe/1.htm",],["name"=>"彼得后书","folder"=>"2pe","url"=>"2pe/1.htm",],["name"=>"约翰一书","folder"=>"1jo","url"=>"1jo/1.htm",],["name"=>"约翰二书","folder"=>"2jo","url"=>"2jo/1.htm",],["name"=>"约翰三书","folder"=>"3jo","url"=>"3jo/1.htm",],["name"=>"犹大书","folder"=>"jud","url"=>"jud/1.htm",],["name"=>"启示录","folder"=>"rev","url"=>"rev/1.htm",],
];


require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$book_url = 'sample/script.html';
$root_url = 'sample/n';

foreach ($books as $index => $book) {

    // $book_url = $root_url . $book['url'];
    // echo $book_url;
    // echo "<br>";

    // $content = file_get_contents($filename);
    // $output = mb_convert_encoding($content, 'UTF-8', 'GB2312');
    // file_put_contents($new_filename.'.txt', $output);


    $book_folder = 'sample/n' . str_pad($index,2,'0',STR_PAD_LEFT) . '-' . $book['folder'];
    $chp1_filename = 'chp001.html';
    // $new_chp1_filename = 'chp1.html';
    // mkdir($book_folder);
    // rename($book_folder.'/'.$chp1_filename, $book_folder.'/'.$new_chp1_filename);

    $chp1_url = $book_folder . '/' . $chp1_filename;
    //
    // SCRAP CHAPTER
    //
    $chps = scrap_book($chp1_url);
    for ($chp = 1; $chp <= end($chps)['index']; $chp++) { 
        $chp_filename = 'chp' . str_pad($chp, 3, '0', STR_PAD_LEFT) . '.html';
        $chp_url = $book_folder.'/'.$chp_filename;

        // $destination = $book_folder.'/'.$chp_filename;
        
        $verses = scrap_chapter($chp_url);
        // print_r($verses);
        write_chapter(str_pad($index,2,'0',STR_PAD_LEFT).$book['folder'], str_pad($chp, 3, '0', STR_PAD_LEFT), $verses);

    }
    // exit;
}


//
// SCRAP BOOK
//

// $result = scrap_book($book_url, 'jos');
// print_r($result);
function scrap_book($book_url) {

    $dom = new Dom;
    $dom->setOptions(['enforceEncoding' => 'utf8']);
    $dom->load($book_url);

    $content = $dom->find('table a');

    $index = [];

    foreach ($content as $chapter) {
        if (strlen($chapter->text)<=3
            &&
            strlen($chapter->text)>0) {
            array_push($index, [
                'url' => $chapter->getAttribute('href'),
                'index' => trim($chapter->text),
                ]);
        }
    }

    return $index;
}


// $result = scrap_chapter($book_url, 'jos');
// print_r($result);
function scrap_chapter($chapter_url) {
    $dom = new Dom;
    $dom->setOptions(['enforceEncoding' => 'utf8']);
    $dom->load($chapter_url);

    $trs = $dom->find('tr');

    $index = [];

    foreach ($trs as $tr) {
        $td = $tr->find('td');

        // verse
        if (count($td) == 4) {
            array_push($index, [
                'type' => 'verse',
                'index' => $td[1]->text,
                'text' => $td[3]->text,
                ]);
        }
    }

    return $index;
}

function write_chapter($book, $chapter, $verses) {

    $output = '';
    foreach ($verses as $verse) {
        $output .= $verse['index'] . " " . $verse['text'] . "\n";
    }

    $folder_path = 'output/'.$book;
    if (!file_exists($folder_path)) {
        mkdir($folder_path);
    }
    file_put_contents($folder_path . '/' . $chapter, $output);

}
