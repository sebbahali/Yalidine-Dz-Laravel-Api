<?php
namespace Sebbahnouri\Yalidine;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Client;

class Yalidine{ 

private static $url = "https://api.yalidine.com/v1/";
private static $api_id = null;
private static $api_token = null;


public static function Guzzle()
{
    if (is_null(self::$api_id)) {
        self::$api_id = config('Yale.api_id');
    }
    if (is_null(self::$api_token)) {
        self::$api_token = config('Yale.api_token');
    }
}
public static function RetrieveParcels(array $trackings)
{
    self::Guzzle();

    $client = new Client();
    $pt='parcels?tracking=';
    if($trackings==[]){
    $pt='parcels';
    
    }
    $tracking = implode(',', $trackings);
    $url = self::$url . $pt . $tracking;

    $response = $client->get($url, [
        'headers' => [
            'X-API-ID' => self::$api_id,
            'X-API-TOKEN' => self::$api_token
        ]
    ]);

    $response_array = json_decode($response->getBody(), true);
    return $response_array;
}
public static function CreateParcels($parcels)
{
    self::Guzzle();

    $client = new Client();
    $url = self::$url . 'parcels/';

    $response = $client->post($url, [
        'headers' => [
            'X-API-ID' => self::$api_id,
            'X-API-TOKEN' => self::$api_token,
            'Content-Type' => 'application/json'
        ],
        'json' => $parcels
    ]);

    $response_array = json_decode($response->getBody(), true);
    return $response_array;
}

public static function DeleteParcels(array $trackings)
{
    self::Guzzle();

    $client = new Client();
    $pt='parcels?tracking=';
if($trackings==[]){
$pt='parcels';

}
    $tracking = implode(',', $trackings);
    $url = self::$url . $pt . $tracking;

    $response = $client->delete($url, [
        'headers' => [
            'X-API-ID' => self::$api_id,
            'X-API-TOKEN' => self::$api_token
        ]
    ]);

    $response_array = json_decode($response->getBody(), true);
    return $response_array;
}
public static function Retrievedeliveryfees($wilaya_id)
{
    self::Guzzle();
    $pt='deliveryfees?wilaya_id';
if($wilaya_id==[]){
$pt='deliveryfees';

}
    $wilaya_id1 = implode(',', $wilaya_id);
    $client = new Client();
    $url = self::$url . $pt. $wilaya_id1;

    $response = $client->get($url, [
        'headers' => [
            'X-API-ID' => self::$api_id,
            'X-API-TOKEN' => self::$api_token
        ]
    ]);

    $response_array = json_decode($response->getBody(), true);
    return $response_array;
}

public static function DeliveredParcels($status)
{
    self::Guzzle();

    
$pt='histories?status=';
if($status==''){
$pt='histories';

}
$client = new Client();
    $url = self::$url . $pt . $status;

    $response = $client->get($url, [
        'headers' => [
            'X-API-ID' => self::$api_id,
            'X-API-TOKEN' => self::$api_token
        ]
    ]);

    $response_array = json_decode($response->getBody(), true);
    return $response_array;
}
}