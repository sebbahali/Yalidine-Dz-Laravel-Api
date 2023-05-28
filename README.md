# Nouri-YalidineLaravelApi

laravel package For Yalidine Api

in composer.json

```json
    "minimum-stability": "dev"
```

then

```bash
composer require sebbahnouri/yalidine
```

#add in config app.php
in providers

```php
  Sebbahnouri\Yalidine\Providers\YaledineServiceProvider::class
```

#publish the config file

```bash
php artisan vendor:publish --tag=Yale-config
```

# then add in your env file

```bash
API_ID=******
API_TOKEN=*******
```

take it from Yalidine website https://www.yalidine.com/

#invoke the singleton

```php
use Sebbahnouri\Yalidine\Yalidine;

$yalidine = app(Yalidine::class);
```

#Retrieve the parcels

```php
$yalidine->retrieveParcels()  for all the parcels
```

or

```php
$trackings=['yal-205643','yal-454FU'];

$yalidine->retrieveParcels($trackings);
```

#Retrieve the Histories
to get all

```php
$status='';
```

or

```php
 $status='Livré';
 $yalidine->deliveredParcels($status)
```

#Create the parcels

```php
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



$yalidine->createParcels($parcels)
```

#Delete the parcels

```php
$trackings=['yal-205643','yal-454FU'];
$yalidine->deleteParcels($trackings)
```

#Retrieve the delivery fees

```php
$wilaya_id=['13','14'];
$yalidine->retrieveDeliveryfees($wilaya_id);
```

#or all using

```php
$yalidine->retrieveDeliveryfees();
```
