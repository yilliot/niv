<?php
$psa_index = [
"1"=>"1.htm",
"2"=>"2.htm",
"3"=>"3.htm",
"4"=>"4.htm",
"5"=>"5.htm",
"6"=>"6.htm",
"7"=>"7.htm",
"8"=>"8.htm",
"9"=>"9.htm",
"10"=>"10.htm",
"11"=>"11.htm",
"12"=>"12.htm",
"13"=>"13.htm",
"14"=>"14.htm",
"15"=>"15.htm",
"16"=>"16.htm",
"17"=>"17.htm",
"18"=>"18.htm",
"19"=>"19.htm",
"20"=>"20.htm",
"21"=>"21.htm",
"22"=>"22.htm",
"23"=>"23.htm",
"24"=>"24.htm",
"25"=>"25.htm",
"26"=>"26.htm",
"27"=>"27.htm",
"28"=>"28.htm",
"29"=>"29.htm",
"30"=>"30.htm",
"31"=>"31.htm",
"32"=>"32.htm",
"33"=>"33.htm",
"34"=>"34.htm",
"35"=>"35.htm",
"36"=>"36.htm",
"37"=>"37.htm",
"38"=>"38.htm",
"39"=>"39.htm",
"40"=>"40.htm",
"41"=>"41.htm",
"42"=>"42.htm",
"43"=>"43.htm",
"44"=>"44.htm",
"45"=>"45.htm",
"46"=>"46.htm",
"47"=>"47.htm",
"48"=>"48.htm",
"49"=>"49.htm",
"50"=>"50.htm",
"51"=>"51.htm",
"52"=>"52.htm",
"53"=>"53.htm",
"54"=>"54.htm",
"55"=>"55.htm",
"56"=>"56.htm",
"57"=>"57.htm",
"58"=>"58.htm",
"59"=>"59.htm",
"60"=>"60.htm",
"61"=>"61.htm",
"62"=>"62.htm",
"63"=>"63.htm",
"64"=>"64.htm",
"65"=>"65.htm",
"66"=>"66.htm",
"67"=>"67.htm",
"68"=>"68.htm",
"69"=>"69.htm",
"70"=>"70.htm",
"71"=>"71.htm",
"72"=>"72.htm",
"73"=>"73.htm",
"74"=>"74.htm",
"75"=>"75.htm",
"76"=>"76.htm",
"77"=>"77.htm",
"78"=>"78.htm",
"79"=>"79.htm",
"80"=>"80.htm",
"81"=>"81.htm",
"82"=>"82.htm",
"83"=>"83.htm",
"84"=>"84.htm",
"85"=>"85.htm",
"86"=>"86.htm",
"87"=>"87.htm",
"88"=>"88.htm",
"89"=>"89.htm",
"90"=>"90.htm",
"91"=>"91.htm",
"92"=>"92.htm",
"93"=>"93.htm",
"94"=>"94.htm",
"95"=>"95.htm",
"96"=>"96.htm",
"97"=>"97.htm",
"98"=>"98.htm",
"99"=>"99.htm",
"100"=>"100.htm",
"101"=>"101.htm",
"102"=>"102.htm",
"103"=>"103.htm",
"104"=>"104.htm",
"105"=>"105.htm",
"106"=>"106.htm",
"107"=>"107.htm",
"108"=>"108.htm",
"109"=>"109.htm",
"110"=>"110.htm",
"111"=>"111.htm",
"112"=>"112.htm",
"113"=>"113.htm",
"114"=>"114.htm",
"115"=>"115.htm",
"116"=>"116.htm",
"117"=>"117.htm",
"118"=>"118.htm",
"119"=>"119.htm",
"120"=>"120.htm",
"121"=>"121.htm",
"122"=>"122.htm",
"123"=>"123.htm",
"124"=>"124.htm",
"125"=>"125.htm",
"126"=>"126.htm",
"127"=>"127.htm",
"128"=>"128.htm",
"129"=>"129.htm",
"130"=>"130.htm",
"131"=>"131.htm",
"132"=>"132.htm",
"133"=>"133.htm",
"134"=>"134.htm",
"135"=>"135.htm",
"136"=>"136.htm",
"137"=>"137.htm",
"138"=>"138.htm",
"139"=>"139.htm",
"140"=>"140.htm",
"141"=>"141.htm",
"142"=>"142.htm",
"143"=>"143.htm",
"144"=>"144.htm",
"145"=>"145.htm",
"146"=>"146.htm",
"147"=>"147.htm",
"148"=>"148.htm",
"149"=>"149.htm",
"150"=>"150.htm",
];

require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$book_url = 'sample/script.html';
$root_url = 'http://xybk.fuyin.tv/Bible/NCV/gb/psa';



$book_folder = 'sample/n18-psa';
foreach ($psa_index as $index => $url) {
    $chp_filename = 'chp' . str_pad($index,3,'0',STR_PAD_LEFT) . '.html';
    $chp_url = $root_url.'/'.$url;

    // echo $chp_url;exit;

    $destination = $book_folder.'/'.$chp_filename;

    get_and_put($chp_url, $destination);
}

function get_and_put($source, $destination)
{
    $content = file_get_contents($source);
    $output = mb_convert_encoding($content, 'UTF-8', 'GB2312');
    file_put_contents($destination, $output);
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

//
// SCRAP CHAPTER
//

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

// write_chapter('jos', 4, $result);
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

