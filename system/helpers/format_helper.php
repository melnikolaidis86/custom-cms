<?php

    //Format Date
    function formatDate($date) {

        return date("j F, Y, g:i a", strtotime($date));
    }

    //URL Format
    function urlFormat($str) {

        //Strip out all whitespace
        $str = preg_replace('/\s*/', '', $str);
        //Convert string to lowercase
        $str = strtolower($str);
        //Url encode
        $str = urlencode($str);
        
        return $str;
    }

    //An excerpt function for intro text - Thanks to wordpress
    function getExcerpt($str, $startPos=0, $maxLength=150) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength-3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= '...';
        } else {
            $excerpt = $str;
        }
        
        return $excerpt;
    }
    