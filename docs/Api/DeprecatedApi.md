# Ynab\DeprecatedApi

All URIs are relative to *https://api.youneedabudget.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateTransactions**](DeprecatedApi.md#bulkCreateTransactions) | **POST** /budgets/{budget_id}/transactions/bulk | Bulk create transactions


# **bulkCreateTransactions**
> \Ynab\Model\BulkResponse bulkCreateTransactions($budgetId, $transactions)

Bulk create transactions

Creates multiple transactions.  Although this endpoint is still supported, it is recommended to use 'POST /budgets/{budget_id}/transactions' to create multiple transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Ynab\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ynab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Ynab\Api\DeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budgetId = "budgetId_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget).
$transactions = new \Ynab\Model\BulkTransactions(); // \Ynab\Model\BulkTransactions | The list of transactions to create

try {
    $result = $apiInstance->bulkCreateTransactions($budgetId, $transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedApi->bulkCreateTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetId** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.youneedabudget.com/#oauth-default-budget). |
 **transactions** | [**\Ynab\Model\BulkTransactions**](../Model/BulkTransactions.md)| The list of transactions to create |

### Return type

[**\Ynab\Model\BulkResponse**](../Model/BulkResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

