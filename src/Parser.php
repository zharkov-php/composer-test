<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 01.05.2017
 * Time: 16:49
 */
namespace zharkov\parser;

//use ParserInterface;

class Parser implements ParserInterface
{


    public function process(string $url, string $tag): array
    {
        $htmlPage = file_get_contents($url);

        if ($htmlPage === false){
            return ['INVALID URL'];
        }
        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s' , $htmlPage , $strings);
        if(empty($strings[1])){
            return ['THERE ARE NO SUCH TAGS ON THE PAGE'];
        }

        return $strings[1];
    }
}