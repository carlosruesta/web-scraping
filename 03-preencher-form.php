<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require ('vendor/autoload.php');

$httpBrowser = new HttpBrowser(HttpClient::create());

$crawler = $httpBrowser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

$httpBrowser->clickLink('Login');

$crawler = $httpBrowser->submitForm('Go', [
    'username' => 'abc',
    'password' => '123'
], 'GET');

echo $crawler->html();