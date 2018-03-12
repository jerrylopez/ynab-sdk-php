<?php

require '../vendor/autoload.php';

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()
    ->setApiKey('Authorization', '{{YOUR_ACCESS_TOKEN}}')
    ->setApiKeyPrefix('Authorization', 'Bearer');

$client = new Ynab\Client($config);

try {
    $result = $client->api('budgets')->getBudgets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when retrieving budgets: ', $e->getMessage(), PHP_EOL;
}