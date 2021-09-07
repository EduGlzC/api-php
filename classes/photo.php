<?php

class Photo {
    public $apiVendor = "https://pixabay.com/api/";
    
    function getPhotos(String $term = ""){
        $term = ($term == "") ? getenv("DEFAULT_SEARCH") : $term;       
        $typeMedia = "photo&pretty=true";
        $key=getenv("KEY");
        $completeCall = $this->apiVendor . "?key=" . $key . "&q=" . $term ."&image_type=" . $typeMedia; 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $completeCall); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        $data = curl_exec($ch); 
        curl_close($ch); 
        echo $data;
    }
    
}
    
   