# SaveTransactionsResponseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionIds** | **string[]** | The transaction ids that were saved | 
**transaction** | [**\Ynab\Model\TransactionDetail**](TransactionDetail.md) | If a single transaction was specified, the transaction that was saved | [optional] 
**transactions** | [**\Ynab\Model\TransactionDetail[]**](TransactionDetail.md) | If multiple transactions were specified, the transactions that were saved | [optional] 
**duplicateImportIds** | **string[]** | If multiple transactions were specified, a list of import_ids that were not created because of an existing &#x60;import_id&#x60; found on the same account | [optional] 
**serverKnowledge** | **int** | The knowledge of the server | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


