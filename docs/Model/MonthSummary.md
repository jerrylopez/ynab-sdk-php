# MonthSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**month** | [**\DateTime**](\DateTime.md) |  | 
**note** | **string** |  | [optional] 
**income** | **int** | The total amount of transactions categorized to &#39;Inflow: To be Budgeted&#39; in the month | 
**budgeted** | **int** | The total amount budgeted in the month | 
**activity** | **int** | The total amount of transactions in the month, excluding those categorized to &#39;Inflow: To be Budgeted&#39; | 
**toBeBudgeted** | **int** | The available amount for &#39;To be Budgeted&#39; | 
**ageOfMoney** | **int** | The Age of Money as of the month | [optional] 
**deleted** | **bool** | Whether or not the month has been deleted.  Deleted months will only be included in delta requests. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


