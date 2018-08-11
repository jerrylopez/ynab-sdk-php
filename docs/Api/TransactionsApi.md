# Ynab\TransactionsApi

All URIs are relative to *https://api.youneedabudget.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateTransactions**](TransactionsApi.md#bulkCreateTransactions) | **POST** /budgets/{budget_id}/transactions/bulk | Bulk create transactions
[**createTransaction**](TransactionsApi.md#createTransaction) | **POST** /budgets/{budget_id}/transactions | Create new transaction
[**getTransactions**](TransactionsApi.md#getTransactions) | **GET** /budgets/{budget_id}/transactions | List transactions
[**getTransactionsByAccount**](TransactionsApi.md#getTransactionsByAccount) | **GET** /budgets/{budget_id}/accounts/{account_id}/transactions | List account transactions
[**getTransactionsByCategory**](TransactionsApi.md#getTransactionsByCategory) | **GET** /budgets/{budget_id}/categories/{category_id}/transactions | List category transactions
[**getTransactionsById**](TransactionsApi.md#getTransactionsById) | **GET** /budgets/{budget_id}/transactions/{transaction_id} | Single transaction
[**getTransactionsByPayee**](TransactionsApi.md#getTransactionsByPayee) | **GET** /budgets/{budget_id}/payees/{payee_id}/transactions | List payee transactions
[**updateTransaction**](TransactionsApi.md#updateTransaction) | **PUT** /budgets/{budget_id}/transactions/{transaction_id} | Updates an existing transaction


# **bulkCreateTransactions**
> \Ynab\Model\BulkResponse bulkCreateTransactions($budget_id, $transactions)

Bulk create transactions

Creates multiple transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$transactions = new \Ynab\Model\BulkTransactions(); // \Ynab\Model\BulkTransactions | The list of Transactions to create.

try {
    $result = $apiInstance->bulkCreateTransactions($budget_id, $transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->bulkCreateTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **transactions** | [**\Ynab\Model\BulkTransactions**](../Model/BulkTransactions.md)| The list of Transactions to create. |

### Return type

[**\Ynab\Model\BulkResponse**](../Model/BulkResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransaction**
> \Ynab\Model\TransactionResponse createTransaction($budget_id, $transaction)

Create new transaction

Creates a transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$transaction = new \Ynab\Model\SaveTransactionWrapper(); // \Ynab\Model\SaveTransactionWrapper | The Transaction to create.

try {
    $result = $apiInstance->createTransaction($budget_id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **transaction** | [**\Ynab\Model\SaveTransactionWrapper**](../Model/SaveTransactionWrapper.md)| The Transaction to create. |

### Return type

[**\Ynab\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactions**
> \Ynab\Model\TransactionsResponse getTransactions($budget_id, $since_date, $type)

List transactions

Returns budget transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$since_date = new \DateTime("2013-10-20"); // \DateTime | Only return transactions on or after this date.
$type = "type_example"; // string | Only return transactions of a certain type ('uncategorized' and 'unapproved' are currently supported)

try {
    $result = $apiInstance->getTransactions($budget_id, $since_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **since_date** | **\DateTime**| Only return transactions on or after this date. | [optional]
 **type** | **string**| Only return transactions of a certain type (&#39;uncategorized&#39; and &#39;unapproved&#39; are currently supported) | [optional]

### Return type

[**\Ynab\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByAccount**
> \Ynab\Model\TransactionsResponse getTransactionsByAccount($budget_id, $account_id, $since_date, $type)

List account transactions

Returns all transactions for a specified account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$account_id = "account_id_example"; // string | The ID of the Account.
$since_date = new \DateTime("2013-10-20"); // \DateTime | Only return transactions on or after this date.
$type = "type_example"; // string | Only return transactions of a certain type (i.e. 'uncategorized', 'unapproved')

try {
    $result = $apiInstance->getTransactionsByAccount($budget_id, $account_id, $since_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **account_id** | [**string**](../Model/.md)| The ID of the Account. |
 **since_date** | **\DateTime**| Only return transactions on or after this date. | [optional]
 **type** | **string**| Only return transactions of a certain type (i.e. &#39;uncategorized&#39;, &#39;unapproved&#39;) | [optional]

### Return type

[**\Ynab\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByCategory**
> \Ynab\Model\HybridTransactionsResponse getTransactionsByCategory($budget_id, $category_id, $since_date, $type)

List category transactions

Returns all transactions for a specified category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$category_id = "category_id_example"; // string | The ID of the Category.
$since_date = new \DateTime("2013-10-20"); // \DateTime | Only return transactions on or after this date.
$type = "type_example"; // string | Only return transactions of a certain type (i.e. 'uncategorized', 'unapproved')

try {
    $result = $apiInstance->getTransactionsByCategory($budget_id, $category_id, $since_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **category_id** | [**string**](../Model/.md)| The ID of the Category. |
 **since_date** | **\DateTime**| Only return transactions on or after this date. | [optional]
 **type** | **string**| Only return transactions of a certain type (i.e. &#39;uncategorized&#39;, &#39;unapproved&#39;) | [optional]

### Return type

[**\Ynab\Model\HybridTransactionsResponse**](../Model/HybridTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsById**
> \Ynab\Model\TransactionResponse getTransactionsById($budget_id, $transaction_id)

Single transaction

Returns a single transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$transaction_id = "transaction_id_example"; // string | The ID of the Transaction.

try {
    $result = $apiInstance->getTransactionsById($budget_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **transaction_id** | [**string**](../Model/.md)| The ID of the Transaction. |

### Return type

[**\Ynab\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByPayee**
> \Ynab\Model\HybridTransactionsResponse getTransactionsByPayee($budget_id, $payee_id, $since_date, $type)

List payee transactions

Returns all transactions for a specified payee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$payee_id = "payee_id_example"; // string | The ID of the Payee.
$since_date = new \DateTime("2013-10-20"); // \DateTime | Only return transactions on or after this date.
$type = "type_example"; // string | Only return transactions of a certain type (i.e. 'uncategorized', 'unapproved')

try {
    $result = $apiInstance->getTransactionsByPayee($budget_id, $payee_id, $since_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByPayee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **payee_id** | [**string**](../Model/.md)| The ID of the Payee. |
 **since_date** | **\DateTime**| Only return transactions on or after this date. | [optional]
 **type** | **string**| Only return transactions of a certain type (i.e. &#39;uncategorized&#39;, &#39;unapproved&#39;) | [optional]

### Return type

[**\Ynab\Model\HybridTransactionsResponse**](../Model/HybridTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransaction**
> \Ynab\Model\TransactionResponse updateTransaction($budget_id, $transaction_id, $transaction)

Updates an existing transaction

Updates a transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$transaction_id = "transaction_id_example"; // string | The ID of the Transaction.
$transaction = new \Ynab\Model\SaveTransactionWrapper(); // \Ynab\Model\SaveTransactionWrapper | The Transaction to update.

try {
    $result = $apiInstance->updateTransaction($budget_id, $transaction_id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **transaction_id** | [**string**](../Model/.md)| The ID of the Transaction. |
 **transaction** | [**\Ynab\Model\SaveTransactionWrapper**](../Model/SaveTransactionWrapper.md)| The Transaction to update. |

### Return type

[**\Ynab\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

