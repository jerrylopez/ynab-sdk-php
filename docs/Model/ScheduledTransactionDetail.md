# ScheduledTransactionDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**date_first** | [**\DateTime**](\DateTime.md) | The first date for which the Scheduled Transaction was scheduled. | 
**date_next** | [**\DateTime**](\DateTime.md) | The next date for which the Scheduled Transaction is scheduled. | 
**frequency** | **string** |  | 
**amount** | **float** | The scheduled transaction amount in milliunits format | 
**account_id** | **string** |  | 
**subtransactions** | [**\Ynab\Model\ScheduledSubTransaction[]**](ScheduledSubTransaction.md) | If a split scheduled transaction, the sub-transactions. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


