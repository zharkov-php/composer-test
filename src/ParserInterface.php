<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 01.05.2017
 * Time: 16:50
 */
namespace zharkov\parser;

interface ParserInterface
{
    public function process(string $url, string $tag) : array;
}