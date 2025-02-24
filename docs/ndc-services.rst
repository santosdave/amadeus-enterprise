NDC (New Distribution Capability) Services
========================================

Overview
--------

The Amadeus Enterprise PHP Client now supports NDC services, providing a modern, flexible approach to airline distribution. These services allow for more personalized and comprehensive travel booking experiences.

Supported NDC Services
--------------------

The following NDC services are now available:

* Travel_OfferPrice (v1.3)
* Travel_OrderCreate (v1.7)
* Travel_OrderCancel (v1.0)
* Travel_OrderChange (v1.9)
* Travel_OrderPay (v1.7)
* Travel_OrderRetrieve (v1.7)
* Travel_OrderReshop (v1.6)
* Travel_SeatAvailability (v1.0)
* Travel_ServiceList (v1.1)

NDC Workflow Example
------------------

The typical NDC workflow involves the following steps:

1. **Offer Price**: Validate and confirm pricing for a specific offer
2. **Order Create**: Create an order with passenger and offer details
3. **Service List**: Retrieve available services for the order
4. **Order Pay**: Complete payment for the order
5. **Order Retrieve**: Fetch order details
6. **Optional - Order Change/Cancel**: Modify or cancel the order

Complete NDC Workflow Example
~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. code-block:: php

    <?php
    use Amadeus\Client;
    use Amadeus\Client\RequestOptions\Travel;

    class NDCBookingExample {
        private $client;

        public function __construct(Client $client) {
            $this->client = $client;
        }

        public function performNDCBooking() {
            // Example implementation...
            // (rest of the PHP code remains the same)
        }
    }

Payment Options
-------------

The NDC services support two primary payment methods:

Cash Payment
~~~~~~~~~~~

.. code-block:: php

    $orderPayOptions = new Travel\TravelOrderPayOptions([
        'orderId' => 'ORDER_ID',
        'ownerCode' => 'AIRLINE_CODE',
        'amount' => 500.00,
        'currencyCode' => 'USD',
        'typeCode' => Travel\TravelOrderPayOptions::TYPE_CASH,
        'paymentMethod' => Travel\TravelOrderPayOptions::METHOD_CASH
    ]);

Credit Card Payment
~~~~~~~~~~~~~~~~~

.. code-block:: php

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

Order Modification
---------------

Changing an Order
~~~~~~~~~~~~~~~

.. code-block:: php

    $orderChangeOptions = Travel\TravelOrderChangeOptions::create([
        // Order change options implementation...
    ]);

Canceling an Order
~~~~~~~~~~~~~~~~

.. code-block:: php

    $cancelOptions = Travel\TravelOrderCancelOptions::create([
        'orderId' => 'ORDER_ID',
        'ownerCode' => 'AIRLINE_CODE'
    ]);

Important Notes
-------------

* Always replace placeholder values like ``'ORDER_ID'``, ``'AIRLINE_CODE'``, etc., with actual values from your specific booking.
* Ensure you have the correct permissions and credentials to use these NDC services.
* The exact structure of requests and responses may vary depending on the specific airline and their NDC implementation.

Error Handling
------------

Always wrap your NDC service calls in try-catch blocks to handle potential errors:

.. code-block:: php

    try {
        $result = $this->client->travelOrderCreate($orderCreateOptions);
    } catch (\Amadeus\Client\Exception $e) {
        // Handle specific Amadeus client exceptions
        echo "Amadeus Error: " . $e->getMessage();
    } catch (\Exception $e) {
        // Handle other general exceptions
        echo "General Error: " . $e->getMessage();
    }

Versioning
---------

Current NDC Services Versions:

* Travel_OfferPrice: v1.3
* Travel_OrderCreate: v1.7
* Travel_OrderCancel: v1.0
* Travel_OrderChange: v1.9
* Travel_OrderPay: v1.7
* Travel_OrderRetrieve: v1.7
* Travel_OrderReshop: v1.6
* Travel_SeatAvailability: v1.0
* Travel_ServiceList: v1.1
