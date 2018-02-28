# Ynab\ScheduledTransactionsApi

All URIs are relative to *https://api.youneedabudget.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getScheduledTransactionById**](ScheduledTransactionsApi.md#getScheduledTransactionById) | **GET** /budgets/{budget_id}/scheduled_transactions/{scheduled_transaction_id} | Single scheduled transaction
[**getScheduledTransactions**](ScheduledTransactionsApi.md#getScheduledTransactions) | **GET** /budgets/{budget_id}/scheduled_transactions | List scheduled transactions


# **getScheduledTransactionById**
> \Ynab\Model\ScheduledTransactionResponse getScheduledTransactionById($budget_id, $scheduled_transaction_id)

Single scheduled transaction

Returns a single scheduled transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\ScheduledTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.
$scheduled_transaction_id = "scheduled_transaction_id_example"; // string | The ID of the Scheduled Transaction.

try {
    $result = $apiInstance->getScheduledTransactionById($budget_id, $scheduled_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTransactionsApi->getScheduledTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |
 **scheduled_transaction_id** | [**string**](../Model/.md)| The ID of the Scheduled Transaction. |

### Return type

[**\Ynab\Model\ScheduledTransactionResponse**](../Model/ScheduledTransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledTransactions**
> \Ynab\Model\ScheduledTransactionsResponse getScheduledTransactions($budget_id)

List scheduled transactions

Returns all scheduled transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\ScheduledTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The ID of the Budget.

try {
    $result = $apiInstance->getScheduledTransactions($budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTransactionsApi->getScheduledTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | [**string**](../Model/.md)| The ID of the Budget. |

### Return type

[**\Ynab\Model\ScheduledTransactionsResponse**](../Model/ScheduledTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

