<?php

namespace Application\Controller;

use GuzzleHttp;

class IndexController
{
    public function indexAction()
    {
        $obj = new \stdClass();

        $obj->hello = 'hello world \n';

        // load class for composer test
        $guzzle = new GuzzleHttp\Client();

        $obj->guzzle = $guzzle;

        return $obj;
    }
}