<?php
namespace Sebbahnouri\Yalidine\Requests;

class Parcel implements \JsonSerializable
{
    public string $orderId;
    public string $fromWilayaName;
    public string $firstname;
    public string $familyname;
    public string $contactPhone;
    public string $address;
    public string $toCommuneName;
    public string $toWilayaName;
    public string $productList;
    public float $price;
    public float $height;
    public float $width;
    public float $length;
    public float $weight;
    public bool $freeshipping;
    public bool $isStopdesk;
    public int $stopdeskId = 0;
    public bool $hasExchange;
    public ?string $productToCollect;

    public function jsonSerialize()
    {
        return [
            "order_id" => $this->orderId,
            "from_wilaya_name" => $this->fromWilayaName,
            "firstname" => $this->firstname,
            "familyname" => $this->familyname,
            "contact_phone" => $this->contactPhone,
            "address" => $this->address,
            "to_commune_name" => $this->toCommuneName,
            "to_wilaya_name" => $this->toWilayaName,
            "product_list" => $this->productList,
            "price" => $this->price,
            "height" => $this->height,
            "width" => $this->width,
            "length" => $this->length,
            "weight" => $this->weight,
            "freeshipping" => $this->freeshipping,
            "is_stopdesk" => $this->isStopdesk,
            "stopdesk_id" => $this->stopdeskId,
            "has_exchange" => $this->hasExchange,
            "product_to_collect" => $this->productToCollect
        ];
    }
}