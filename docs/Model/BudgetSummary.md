# BudgetSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**name** | **string** |  | 
**lastModifiedOn** | [**\DateTime**](\DateTime.md) | The last time any changes were made to the budget from either a web or mobile client | [optional] 
**firstMonth** | [**\DateTime**](\DateTime.md) | The earliest budget month | [optional] 
**lastMonth** | [**\DateTime**](\DateTime.md) | The latest budget month | [optional] 
**dateFormat** | [**\Ynab\Model\DateFormat**](DateFormat.md) |  | [optional] 
**currencyFormat** | [**\Ynab\Model\CurrencyFormat**](CurrencyFormat.md) |  | [optional] 
**accounts** | [**\Ynab\Model\Account[]**](Account.md) | The budget accounts (only included if &#x60;include_accounts&#x3D;true&#x60; specified as query parameter) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


