# BudgetSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**name** | **string** |  | 
**last_modified_on** | [**\DateTime**](\DateTime.md) | The last time any changes were made to the budget from either a web or mobile client | [optional] 
**first_month** | [**\DateTime**](\DateTime.md) | The earliest budget month | [optional] 
**last_month** | [**\DateTime**](\DateTime.md) | The latest budget month | [optional] 
**date_format** | [**\Ynab\Model\DateFormat**](DateFormat.md) |  | [optional] 
**currency_format** | [**\Ynab\Model\CurrencyFormat**](CurrencyFormat.md) |  | [optional] 
**accounts** | [**\Ynab\Model\Account[]**](Account.md) | The budget accounts (only included if &#x60;include_accounts&#x3D;true&#x60; specified as query parameter) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


