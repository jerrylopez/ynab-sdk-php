# Ynab\TransactionsApi

All URIs are relative to *https://api.youneedabudget.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTransaction**](TransactionsApi.md#createTransaction) | **POST** /budgets/{budget_id}/transactions | Create a single transaction or multiple transactions
[**getTransactionById**](TransactionsApi.md#getTransactionById) | **GET** /budgets/{budget_id}/transactions/{transaction_id} | Single transaction
[**getTransactions**](TransactionsApi.md#getTransactions) | **GET** /budgets/{budget_id}/transactions | List transactions
[**getTransactionsByAccount**](TransactionsApi.md#getTransactionsByAccount) | **GET** /budgets/{budget_id}/accounts/{account_id}/transactions | List account transactions
[**getTransactionsByCategory**](TransactionsApi.md#getTransactionsByCategory) | **GET** /budgets/{budget_id}/categories/{category_id}/transactions | List category transactions
[**getTransactionsByPayee**](TransactionsApi.md#getTransactionsByPayee) | **GET** /budgets/{budget_id}/payees/{payee_id}/transactions | List payee transactions
[**importTransactions**](TransactionsApi.md#importTransactions) | **POST** /budgets/{budget_id}/transactions/import | Import transactions
[**updateTransaction**](TransactionsApi.md#updateTransaction) | **PUT** /budgets/{budget_id}/transactions/{transaction_id} | Updates an existing transaction
[**updateTransactions**](TransactionsApi.md#updateTransactions) | **PATCH** /budgets/{budget_id}/transactions | Update multiple transactions


# **createTransaction**
> \Ynab\Model\SaveTransactionsResponse createTransaction($budgetId, $data)

Create a single transaction or multiple transactions

Creates a single transaction or multiple transactions.  If you provide a body containing a `transaction` object, a single transaction will be created and if you provide a body containing a `transactions` array, multiple transactions will be created.  Scheduled transactions cannot be created on this endpoint.

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$data = new \Ynab\Model\SaveTransactionsWrapper(); // \Ynab\Model\SaveTransactionsWrapper | The transaction or transactions to create.  To create a single transaction you can specify a value for the `transaction` object and to create multiple transactions you can specify an array of `transactions`.  It is expected that you will only provide a value for one of these objects.

try {
    $result = $apiInstance->createTransaction($budgetId, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **data** | [**\Ynab\Model\SaveTransactionsWrapper**](../Model/SaveTransactionsWrapper.md)| The transaction or transactions to create.  To create a single transaction you can specify a value for the &#x60;transaction&#x60; object and to create multiple transactions you can specify an array of &#x60;transactions&#x60;.  It is expected that you will only provide a value for one of these objects. |

### Return type

[**\Ynab\Model\SaveTransactionsResponse**](../Model/SaveTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionById**
> \Ynab\Model\TransactionResponse getTransactionById($budgetId, $transactionId)

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$transactionId = "transactionId_example"; // string | The id of the transaction

try {
    $result = $apiInstance->getTransactionById($budgetId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **transactionId** | **string**| The id of the transaction |

### Return type

[**\Ynab\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactions**
> \Ynab\Model\TransactionsResponse getTransactions($budgetId, $sinceDate, $type, $lastKnowledgeOfServer)

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$sinceDate = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$lastKnowledgeOfServer = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactions($budgetId, $sinceDate, $type, $lastKnowledgeOfServer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **sinceDate** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **lastKnowledgeOfServer** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\Ynab\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByAccount**
> \Ynab\Model\TransactionsResponse getTransactionsByAccount($budgetId, $accountId, $sinceDate, $type, $lastKnowledgeOfServer)

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$accountId = "accountId_example"; // string | The id of the account
$sinceDate = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$lastKnowledgeOfServer = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactionsByAccount($budgetId, $accountId, $sinceDate, $type, $lastKnowledgeOfServer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **accountId** | **string**| The id of the account |
 **sinceDate** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **lastKnowledgeOfServer** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\Ynab\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByCategory**
> \Ynab\Model\HybridTransactionsResponse getTransactionsByCategory($budgetId, $categoryId, $sinceDate, $type, $lastKnowledgeOfServer)

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$categoryId = "categoryId_example"; // string | The id of the category
$sinceDate = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$lastKnowledgeOfServer = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactionsByCategory($budgetId, $categoryId, $sinceDate, $type, $lastKnowledgeOfServer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **categoryId** | **string**| The id of the category |
 **sinceDate** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **lastKnowledgeOfServer** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\Ynab\Model\HybridTransactionsResponse**](../Model/HybridTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByPayee**
> \Ynab\Model\HybridTransactionsResponse getTransactionsByPayee($budgetId, $payeeId, $sinceDate, $type, $lastKnowledgeOfServer)

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$payeeId = "payeeId_example"; // string | The id of the payee
$sinceDate = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$lastKnowledgeOfServer = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactionsByPayee($budgetId, $payeeId, $sinceDate, $type, $lastKnowledgeOfServer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByPayee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **payeeId** | **string**| The id of the payee |
 **sinceDate** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **lastKnowledgeOfServer** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\Ynab\Model\HybridTransactionsResponse**](../Model/HybridTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importTransactions**
> \Ynab\Model\TransactionsImportResponse importTransactions($budgetId)

Import transactions

Imports available transactions on all linked accounts for the given budget.  Linked accounts allow transactions to be imported directly from a specified financial institution and this endpoint initiates that import.  Sending a request to this endpoint is the equivalent of clicking \"Import\" on each account in the web application or tapping the \"New Transactions\" banner in the mobile applications.  The response for this endpoint contains the transaction ids that have been imported.

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).

try {
    $result = $apiInstance->importTransactions($budgetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->importTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |

### Return type

[**\Ynab\Model\TransactionsImportResponse**](../Model/TransactionsImportResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransaction**
> \Ynab\Model\TransactionResponse updateTransaction($budgetId, $transactionId, $data)

Updates an existing transaction

Updates a single transaction

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$transactionId = "transactionId_example"; // string | The id of the transaction
$data = new \Ynab\Model\SaveTransactionWrapper(); // \Ynab\Model\SaveTransactionWrapper | The transaction to update

try {
    $result = $apiInstance->updateTransaction($budgetId, $transactionId, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **transactionId** | **string**| The id of the transaction |
 **data** | [**\Ynab\Model\SaveTransactionWrapper**](../Model/SaveTransactionWrapper.md)| The transaction to update |

### Return type

[**\Ynab\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransactions**
> \Ynab\Model\SaveTransactionsResponse updateTransactions($budgetId, $data)

Update multiple transactions

Updates multiple transactions, by `id` or `import_id`.

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
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$data = new \Ynab\Model\UpdateTransactionsWrapper(); // \Ynab\Model\UpdateTransactionsWrapper | The transactions to update. Each transaction must have either an `id` or `import_id` specified. If `id` is specified as null an `import_id` value can be provided which will allow transaction(s) to be updated by their `import_id`. If an `id` is specified, it will always be used for lookup.

try {
    $result = $apiInstance->updateTransactions($budgetId, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **data** | [**\Ynab\Model\UpdateTransactionsWrapper**](../Model/UpdateTransactionsWrapper.md)| The transactions to update. Each transaction must have either an &#x60;id&#x60; or &#x60;import_id&#x60; specified. If &#x60;id&#x60; is specified as null an &#x60;import_id&#x60; value can be provided which will allow transaction(s) to be updated by their &#x60;import_id&#x60;. If an &#x60;id&#x60; is specified, it will always be used for lookup. |

### Return type

[**\Ynab\Model\SaveTransactionsResponse**](../Model/SaveTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

