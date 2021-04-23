<?php

require '../vendor/autoload.php';

$client = new Ynab\Client('dc051b0d9f97759ea04e09a6cdf22abb15a5b5917c8345ddbf9900c4fd3160cf');

try {
    $result = $client->api('budgets')->getBudgets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when retrieving budgets: ', $e->getMessage(), PHP_EOL;
}
