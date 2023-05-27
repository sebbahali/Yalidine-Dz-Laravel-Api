# Nouri-YalidineLaravelApi

laravel package For Yalidine Api 

in composer.json 
```bash
    "minimum-stability": "dev"
```
```bash
composer require sebbahnouri/yalidine
```
#add in config app.php 
in providers 
```bash
  Sebbahnouri\Yalidine\Providers\YaledineServiceProvider::class
  ```
  
  #publish your config file 
  ```bash
  php artisan vendor:publish --tag=Yale-config
 ```
 
# then add in your env file 
 ```bash
 API_ID=******
API_TOKEN=*******
```
take it from Yalidine website https://www.yalidine.com/


#Retrieve the parcels
  ```bash
Yalidine::RetrieveParcels([])  for all the parcels
 ```
or
  ```bash
$trackings=['yal-205643','yal-454FU'];

Yalidine::RetrieveParcels($trackings);
  ``` 
 
 #Retrieve the Histories
  to get all
  
 ```bash
 $status=''; 
 ```
 or 
 
```bash
 $status='Livré';
 Yalidine::DeliveredParcels($status)
```
 
 #Create the parcels
 
   ```bash
 $parcels = array( // the array that contains all the parcels
        array ( // first parcel
          "order_id"=>"MyFirstOrder",
                "from_wilaya_name"=>"Batna",
                "firstname"=>"Brahim",
                "familyname"=>"Mohamed",
                "contact_phone"=>"0123456789,",
                "address"=>"Cité Kaidi",
                "to_commune_name"=>"Bordj El Kiffan",
                "to_wilaya_name"=>"Alger",
                "product_list"=>"Presse à café",
                "price"=>3000,
                "height"=> 10,
                "width" => 20,
                "length" => 30,
                "weight" => 6,
                "freeshipping"=> true,
                "is_stopdesk"=> true,
                "stopdesk_id" => 163001,
                "has_exchange"=> 0,
                "product_to_collect" => null
        ),
        array ( // second parcel
        "order_id" =>"MySecondOrder",
                "from_wilaya_name"=>"Batna",
                "firstname"=>"رفيدة",
                "familyname"=>"بن مهيدي",
                "contact_phone"=>"0123456789",
                "address"=>"حي الياسمين",
                "to_commune_name"=>"Ouled Fayet",
                "to_wilaya_name"=>"Alger",
                "product_list"=>"كتب الطبخ",
                "price"=>2400,
                "height" => 10,
                "width" => 20,
                "length" => 30,
                "weight" => 6,
                "freeshipping"=>0,
                "is_stopdesk"=>0,
                "has_exchange"=> false,
        ),
        array ( // third parcel
            ...
        ),
        array( // etc
            ...
        )
    );
       ```
      
        ```bash
 Yalidine::CreateParcels($parcels)
  ```
  
 #Delete the parcels
   ```bash
   $trackings=['yal-205643','yal-454FU'];
 Yalidine::DeleteParcels($trackings)
  ```
 
 #Retrieve the delivery fees
  ```bash
  $wilaya_id=['13','14'];
 Yalidine::Retrievedeliveryfees($wilaya_id);
  ```
 #or all using 
 
  ```bash
 Yalidine::Retrievedeliveryfees([]);
 ```



 
