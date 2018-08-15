<?php

require '../vendor/autoload.php';

use Ynab\Model\SaveTransactionWrapper;

$client = new Ynab\Client('{{YOUR_ACCESS_TOKEN}}');
$budget_id = '{{YOUR_BUDGET_ID}}';

// You can use Carbon for this if you'd like
$date = (new DateTime('12 Aug 2018'))->format('c');

// GET Transactions
try {
    $result = $client->api('transactions')->getTransactions($budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when retrieving budgets: ', $e->getMessage(), PHP_EOL;
}

// POST Transactions

try {
    $transaction = new SaveTransactionWrapper([
        'transaction' => [
            'account_id' => '{{YOUR_ACCOUNT_ID}}',
            'category_id' => '{{YOUR_CATEGORY_ID}}',
            'date' => $date,
            'amount' => 200,
            'payee_name' => 'Wal-Mart',
            'cleared' => 'cleared',
            'approved' => true
        ]
    ]);

    $result = $client->api('transactions')->createTransaction($budget_id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when retrieving budgets: ', $e->getMessage(), PHP_EOL;
}
