<?php 
    include "simple_html_dom.php"; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://www.google.ba/search?q=senaid");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $response = curl_exec($ch); 
    //curl_close(Sch); 
    //echo $response; 

    $html = new simple_html_dom(); 
    $html->load($response); 

    foreach($html->find('a[href^=/url?]') as $link)
        echo $link->plaintext . '<br>';

?>