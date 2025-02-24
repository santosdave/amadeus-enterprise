# NDC (New Distribution Capability) Services

## Overview

The Amadeus Enterprise PHP Client now supports NDC services, providing a modern, flexible approach to airline distribution. These services allow for more personalized and comprehensive travel booking experiences.

## Supported NDC Services

The following NDC services are now available:

- Travel_OfferPrice (v1.3)
- Travel_OrderCreate (v1.7)
- Travel_OrderCancel (v1.0)
- Travel_OrderChange (v1.9)
- Travel_OrderPay (v1.7)
- Travel_OrderRetrieve (v1.7)
- Travel_OrderReshop (v1.6)
- Travel_SeatAvailability (v1.0)
- Travel_ServiceList (v1.1)

## NDC Workflow Example

The typical NDC workflow involves the following steps:

1. **Offer Price**: Validate and confirm pricing for a specific offer
2. **Order Create**: Create an order with passenger and offer details
3. **Service List**: Retrieve available services for the order
4. **Order Pay**: Complete payment for the order
5. **Order Retrieve**: Fetch order details
6. **Optional - Order Change/Cancel**: Modify or cancel the order

### Complete NDC Workflow Example

```php
<?php
use Amadeus\Client;
use Amadeus\Client\RequestOptions\Travel;

class NDCBookingExample {
    private $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function performNDCBooking() {
        // 1. Offer Price
        $offerPriceOptions = new Travel\TravelOfferPriceOptions([
            'passengers' => [
                new Travel\PaxOption([
                    'paxId' => 'P1',
                    'ptc' => 'ADT',
                    'paxRefId' => 'P1.1',
                ]),
                // Add more passengers as needed
            ],
            'selectedOffers' => [
                new Travel\SelectedOfferOption([
                    'OfferRefID' => 'UNIQUE_OFFER_REFERENCE',
                    'OwnerCode' => 'AIRLINE_CODE',
                    'SelectedOfferItem' => [
                        new Travel\SelectedOfferItem([
                            'OfferItemRefID' => 'OFFER_ITEM_ID',
                            'PaxRefID' => ['P1'],
                            'OwnerCode' => 'AIRLINE_CODE',
                        ])
                    ]
                ])
            ],
        ]);

        $offerPriceResult = $this->client->travelOfferPrice($offerPriceOptions);

        // 2. Order Create
        $orderCreateOptions = new Travel\TravelOrderCreateOptions([
            'passengers' => [
                new Travel\OrderCreatePassenger([
                    'paxId' => 'P1',
                    'ptc' => 'ADT',
                    'givenName' => 'John',
                    'surname' => 'Doe',
                    // Add more passenger details
                ]),
            ],
            'selectedOffers' => [
                new Travel\OrderCreateSelectedOffer([
                    'offerId' => 'UNIQUE_OFFER_ID',
                    'ownerCode' => 'AIRLINE_CODE',
                    'selectedOfferItems' => [
                        new Travel\OrderCreateSelectedOfferItem([
                            'offerItemId' => 'OFFER_ITEM_ID',
                            'paxRefIds' => ['P1'],
                        ])
                    ]
                ])
            ]
        ]);

        $orderCreateResult = $this->client->travelOrderCreate($orderCreateOptions);
        $orderId = $orderCreateResult->response->Order->OrderID;

        // 3. Service List (Optional)
        $serviceListOptions = new Travel\TravelServiceListOptions([
            'orderId' => $orderId,
            'orderOwnerCode' => 'AIRLINE_CODE'
        ]);

        $serviceListResult = $this->client->travelServiceList($serviceListOptions);

        // 4. Order Pay
        $orderPayOptions = new Travel\TravelOrderPayOptions([
            'orderId' => $orderId,
            'ownerCode' => 'AIRLINE_CODE',
            'amount' => 500.00,
            'currencyCode' => 'USD',
            'typeCode' => Travel\TravelOrderPayOptions::TYPE_CREDIT_CARD,
            'paymentMethod' => Travel\TravelOrderPayOptions::METHOD_CREDIT_CARD,
            'paymentCard' => new Travel\OrderPay\PaymentCard([
                'creditCardVendorCode' => Travel\OrderPay\PaymentCard::VENDOR_VISA,
                'cardNumber' => '4111111111111111',
                'seriesCode' => '123',
                'expirationDate' => '0726'
            ])
        ]);

        $paymentResult = $this->client->travelOrderPay($orderPayOptions);

        // 5. Order Retrieve
        $orderRetrieveOptions = new Travel\TravelOrderRetrieveOptions([
            'orderId' => $orderId,
            'ownerCode' => 'AIRLINE_CODE'
        ]);

        $orderRetrieveResult = $this->client->travelOrderRetrieve($orderRetrieveOptions);
    }
}
```

## Payment Options

The NDC services support two primary payment methods:

### Cash Payment
```php
$orderPayOptions = new Travel\TravelOrderPayOptions([
    'orderId' => 'ORDER_ID',
    'ownerCode' => 'AIRLINE_CODE',
    'amount' => 500.00,
    'currencyCode' => 'USD',
    'typeCode' => Travel\TravelOrderPayOptions::TYPE_CASH,
    'paymentMethod' => Travel\TravelOrderPayOptions::METHOD_CASH
]);
```

### Credit Card Payment
```php
$orderPayOptions = new Travel\TravelOrderPayOptions([
    'orderId' => 'ORDER_ID',
    'ownerCode' => 'AIRLINE_CODE',
    'amount' => 500.00,
    'currencyCode' => 'USD',
    'typeCode' => Travel\TravelOrderPayOptions::TYPE_CREDIT_CARD,
    'paymentMethod' => Travel\TravelOrderPayOptions::METHOD_CREDIT_CARD,
    'paymentCard' => new Travel\OrderPay\PaymentCard([
        'creditCardVendorCode' => Travel\OrderPay\PaymentCard::VENDOR_VISA,
        'cardNumber' => '4111111111111111',
        'seriesCode' => '123',
        'expirationDate' => '0726'
    ])
]);
```

## Order Modification

### Changing an Order
```php
$orderChangeOptions = Travel\TravelOrderChangeOptions::create([
    'orderId' => 'ORDER_ID',
    'ownerCode' => 'AIRLINE_CODE',
    'selectedOffer' => new Travel\OrderChange\SelectedOffer([
        'offerId' => 'NEW_OFFER_ID',
        'ownerCode' => 'AIRLINE_CODE',
        'selectedOfferItems' => [
            new Travel\OrderChange\SelectedOfferItem([
                'offerItemRefId' => 'NEW_OFFER_ITEM_ID',
                'paxRefId' => 'PASSENGER_ID'
            ])
        ]
    ]),
    'passengers' => [
        new Travel\OrderChange\Pax([
            'paxId' => 'PASSENGER_ID',
            'passengerType' => 'ADT',
            'givenName' => 'Updated',
            'surname' => 'Name'
        ])
    ]
]);

$changeResult = $this->client->travelOrderChange($orderChangeOptions);
```

### Canceling an Order
```php
$cancelOptions = Travel\TravelOrderCancelOptions::create([
    'orderId' => 'ORDER_ID',
    'ownerCode' => 'AIRLINE_CODE'
]);

$cancelResult = $this->client->travelOrderCancel($cancelOptions);
```

## Important Notes

- Always replace placeholder values like `'ORDER_ID'`, `'AIRLINE_CODE'`, etc., with actual values from your specific booking.
- Ensure you have the correct permissions and credentials to use these NDC services.
- The exact structure of requests and responses may vary depending on the specific airline and their NDC implementation.

## Error Handling

Always wrap your NDC service calls in try-catch blocks to handle potential errors:

```php
try {
    $result = $this->client->travelOrderCreate($orderCreateOptions);
} catch (\Amadeus\Client\Exception $e) {
    // Handle specific Amadeus client exceptions
    echo "Amadeus Error: " . $e->getMessage();
} catch (\Exception $e) {
    // Handle other general exceptions
    echo "General Error: " . $e->getMessage();
}
```

## Versioning

Current NDC Services Versions:
- Travel_OfferPrice: v1.3
- Travel_OrderCreate: v1.7
- Travel_OrderCancel: v1.0
- Travel_OrderChange: v1.9
- Travel_OrderPay: v1.7
- Travel_OrderRetrieve: v1.7
- Travel_OrderReshop: v1.6
- Travel_SeatAvailability: v1.0
- Travel_ServiceList: v1.1