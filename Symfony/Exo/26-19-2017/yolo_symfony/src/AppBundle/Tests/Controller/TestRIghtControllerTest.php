<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestRIghtControllerTest extends WebTestCase
{
    public function testYolotest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/yolotest');
    }

}
