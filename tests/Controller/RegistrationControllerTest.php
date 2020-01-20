<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = self::createClient();
        $client->request('GET', '/login');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }
}