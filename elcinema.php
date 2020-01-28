<?php

include('simple_html_dom.php');
$websiteurl = "https://elcinema.com/work/1007052";
$html = file_get_html($websiteurl);
//echo $html;

$data=explode('<div class="flash_message"></div>',$html);

$html2=explode('<li><a href="/work/1007052/cast">(المزيد)</a></li>',$data[1]);
echo $html2[0];


echo '<br>';
echo 'Title:'. $title = $html2[0]->find('div[class=panel jumbo]', 0)->plaintext;
//echo '<br>';
//echo '<br>';
//echo 'story: '.$story = $html->find('p', 0)->plaintext;
//echo '<br>';
//echo 'info: '.$info = $html->find('ul[class=description]', 0)->plaintext;
//echo '<br>';
//echo 'Information: '.$informaiton = $info->find('li[a]', 0)->plaintext;
//echo '<br>';


//$actors= array();

  // foreach($html->find('ul', 0)as $postdiv)
//   echo $postdiv;
  // foreach($postdiv->find('li')as $li)
 //     {
//        $actors [] = $li->attr['a'];

 //       echo $actors->nodeValue . "<br/>";
//      }





?>
