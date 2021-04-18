<?php

require '../vendor/autoload.php';

$client = new Ynab\Client('{{YOUR_ACCESS_TOKEN}}');

try {
    $result = $client->api('budgets')->getBudgets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when retrieving budgets: ', $e->getMessage(), PHP_EOL;
}
