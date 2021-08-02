<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class SecurityControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $this->assertResponseIsSuccessful();

        $this->assertCount(1, $crawler->filter('input[type=email]'));

        $this->assertCount(1, $crawler->filter('input[type=password]'));

        $this->assertCount(1, $crawler->filter('html:contains("Entrar")'));

        $buttonCrawlerNode = $crawler->selectButton('entrarId');
        $form = $buttonCrawlerNode->form(array(
            'password' => '1234',
        ), 'POST');
        $client->submit($form);
        $this->assertContains('Debes indicar el correo', $client->getResponse()->getContent());

        $form = $buttonCrawlerNode->form(array(
            'email' => '1234@gmail',
        ), 'POST');
        $client->submit($form);
        $this->assertContains('Debes indicar la contraseña', $client->getResponse()->getContent());

        $form = $buttonCrawlerNode->form(array(
            'email' => '1234@gmail',
            'password' => '1234',
        ), 'POST');
        $client->submit($form);
        $this->assertContains('Credenciales no válidas', $client->getResponse()->getContent());

        $form = $buttonCrawlerNode->form(array(
            'email' => 'administrador@gmail',
            'password' => '1234',
        ), 'POST');
        $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect('/panel_control/administrador'));

        $form = $buttonCrawlerNode->form(array(
            'email' => 'comercial@gmail',
            'password' => '1234',
        ), 'POST');
        $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect('/panel_control/comercial'));

        $form = $buttonCrawlerNode->form(array(
            'email' => 'jefe@gmail',
            'password' => '1234',
        ), 'POST');
        $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect('/panel_control/jefe'));

        $form = $buttonCrawlerNode->form(array(
            'email' => 'empleado@gmail',
            'password' => '1234',
        ), 'POST');
        $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect('/panel_control/empleado'));
    }
}
