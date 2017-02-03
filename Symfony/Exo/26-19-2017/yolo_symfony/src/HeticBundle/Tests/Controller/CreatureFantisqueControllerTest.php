<?php

namespace HeticBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreatureFantisqueControllerTest extends WebTestCase
{
    public function testIndec()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/creature');
    }

}
