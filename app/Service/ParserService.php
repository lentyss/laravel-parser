<?php

namespace App\Service;

class ParserService 
{
    public function parser() 
    {
        //echo 'parser';


        $ch = curl_init('https://hh.ru/resumes/programmist');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $result = curl_exec($ch);

        //var_dump($result);

        $dom = new \DOMDocument();

        libxml_use_internal_errors(true);
        $dom->loadHTML($result);
        libxml_use_internal_errors(false);

        $xpath = new \DOMXPath($dom);
        for ($i = 1; $i <= 101; $i++)
        {
            $node = $xpath->query('//*[@id="a11y-main-content"]/div['.$i.']', $dom)->item(0);
            var_dump($node->textContent);
        }
        
    }
}