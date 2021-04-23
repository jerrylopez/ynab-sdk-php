# Account

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**name** | **string** |  | 
**type** | **string** | The type of account. Note: payPal, merchantAccount, investmentAccount, and mortgage types have been deprecated and will be removed in the future. | 
**onBudget** | **bool** | Whether this account is on budget or not | 
**closed** | **bool** | Whether this account is closed or not | 
**note** | **string** |  | [optional] 
**balance** | **int** | The current balance of the account in milliunits format | 
**clearedBalance** | **int** | The current cleared balance of the account in milliunits format | 
**unclearedBalance** | **int** | The current uncleared balance of the account in milliunits format | 
**transferPayeeId** | **string** | The payee id which should be used when transferring to this account | 
**directImportLinked** | **bool** | Whether or not the account is linked to a financial institution for automatic transaction import. | [optional] 
**directImportInError** | **bool** | If an account linked to a financial institution (direct_import_linked&#x3D;true) and the linked connection is not in a healthy state, this will be true. | [optional] 
**deleted** | **bool** | Whether or not the account has been deleted.  Deleted accounts will only be included in delta requests. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


