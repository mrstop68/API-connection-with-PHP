<?php
// pages apisindeki içerik(content) alanlarını sayfaya göre listeleme
foreach($dataPAGES as $pages){
    if($pages->link==$locationURL){
        $activePageName=$pages->pagename; //aktif sayfayı bulup aşağıda resimleri sayfaya göre süzme
        $activePage=$pages; //ilgili sayfadaki tüm bilgiler içerik, link,vs
    }
}
//  content dizindeki order a göre sıralama
usort($activePage->content,function($first,$second){
    return $first->order - $second->order;
});
//images apisindeki Anasayfa resimleri
        $newArrayImg=[];
        $filtered_img = array_filter(
        $dataIMG,
        function($objimg){
            return (in_array($GLOBALS['activePageName'],$objimg->pagesimg));
        });
        //aşağıda, yukarıda seçilen resimler arasında index sıralaması karışık olduğu için
        //tekrar index i 0 dan başlatıp birer artırarak diziye eklemek için yazıldı
        foreach($filtered_img as $newArray){
            array_push(($newArrayImg), $newArray);
        };
    $rr= count(($newArrayImg));
    $randIMG=rand(0,$rr-1);
?>