# VehicleDataEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**build_year** | **int** | Gyártási év | [optional] 
**current_km** | **int** | Km óra állás | [optional] 
**cylinder_capacity** | **int** | Hengerűrtartalom, cm&lt;sup&gt;3&lt;/sup&gt; | [optional] 
**drive_type** | **string** | Meghajtás típusa: Benzin/Diesel | [optional] 
**full_weight** | **int** | Teljes tömeg | [optional] 
**id** | **int** |  | [optional] 
**license_plate** | **string** | Rendszámtábla. Lehetőleg - nélkül | [optional] 
**make** | **string** | Gyártmánya (pl BMW, Mazda) | [optional] 
**number_of_seats** | **int** | Szállítható személyek száma | [optional] 
**own_weight** | **int** | Saját tömeg | [optional] 
**performance** | **int** | Teljesítmény, lóerőben megadva | [optional] 
**type** | **string** | Autó típusa. Pl.: BMW 1-es széria / Volvo XC90 széria / 206 széria | [optional] 
**use_type** | **string** | Felhasználás módja. Frontend ellenőrizd kérlek | [optional] 
**vehicle_exact_type** | **string** | Autó pontos típusa pl.: 120d, XC90 2.4 D, 206 1.4 Generation | [optional] 
**vehicle_identification_number** | **string** | Alvázszám, kötelező (17 számjegy, van benne checksum pl: 1GTCS195828195104) több példa: http://randomvin.com/ | [optional] 
**vehicle_type** | **string** | Enumeráció. Lehetséges értékek: Személygépjármű (M1), Tehergépjármű (N1), Motorkerékpár (L3e,L4e,L5e,L7e) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


