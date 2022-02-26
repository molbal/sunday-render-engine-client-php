# PaymentRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**added_time** | [**\DateTime**](\DateTime.md) | A fizetés rögzítésének időpontja | [optional] 
**backend_action_taken** | **bool** | Backend akció megtörtént? Pl.: Webszerviz hívás | [optional] 
**extra_info** | **string** | Extra információ. Ajánlott JSON stringben tartani. (max 512 char) | [optional] 
**id** | **int** |  | [optional] 
**initiator_application** | **string** | Milyen alkalmazás kezdeményezte a fizetést? Pl.: OAP/Asszisztencia | [optional] 
**last_updated_time** | [**\DateTime**](\DateTime.md) | A legutolsó módosítás időpontja | [optional] 
**payment_currency** | **string** | Fizetési valuta | [optional] 
**payment_description** | **string** | Mit fizet ki az ügyfél?  Max 512 karakter | [optional] 
**payment_gateway_transaction_id** | **string** | Bigfish transaction ID | [optional] 
**payment_method** | **string** | A fizetési módszer | [optional] 
**payment_status** | **string** | Fizetés státusza | [optional] 
**payment_value** | **double** | Fizetési összeg | [optional] 
**redirect_to** | **string** | A fizetés megörténte után hova irányítsa vissza a felhasználót? Max 512 karakter | [optional] 
**test_payment** | **bool** | Teszt fizetés esetén true-ra kell állítani, egyébként false. | [optional] 
**user_login_entity** | [**\Swagger\Client\Model\UserLoginEntity**](UserLoginEntity.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


