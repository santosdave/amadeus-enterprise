# amadeus-enterprise: PHP client for the Amadeus GDS SOAP Web Service interface


This client library provides access to the Amadeus GDS SOAP Web Service interface.

To use this client, you must first obtain your personal access to the Web Service interface through an Amadeus Sales channel of your choice.

The Amadeus documentation portal can be found at https://webservices.amadeus.com/

![](http://i.imgur.com/7ZcCgnj.jpg)

We currently support a full AIR booking flow with MasterPricer, including seat selection and ATC ticket changer flow, as well as a number of additional messages useful for automation. See the full list of supported messages [here](docs/list-of-supported-messages.rst).

# Purpose

This library makes it a lot easier for developers to integrate content from the Amadeus Web Services into their projects. It takes care of:

- Session management - setting the correct SOAP headers both for Soap Header 2 and 4.
- Supports all features of Soap Header 4 such as Stateful and Stateless messages.
- Building the correct request message based on the provided options: the library tries to simplify overly complex request structures where possible.
- Handling exceptions and checking for error messages in the response.
- Dealing with different versions of messages.
- Dealing with multiple WSDL files in a WSAP.

# Requirements

- PHP 5.4 or newer _(tested with 5.4 -> 7.3)_
- SOAP, XSL and DOM extensions activated
- A WSDL & authentication details from Amadeus _(SoapHeader 4 or SoapHeader 2)_

# Installation

Install amadeus-enterprise through [Composer](http://getcomposer.org).

```bash
composer require santosdave/amadeus-enterprise
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

Update composer to get the client:

```bash
composer update
```

Once the client is installed, read the [About &amp; Get Started](docs/about-get-started.rst) page.

# Release history

The current release is version 1.13.0.

See the [Changelog](CHANGELOG.md).

# Usage

- [About &amp; Get Started](docs/about-get-started.rst)
- [List of supported messages](docs/list-of-supported-messages.rst)
- [How to](docs/how-to.rst)
- [Examples for sending specific messages](docs/samples.rst)
- [Examples for sending ndc messages](docs/ndc-services.md>)


---

See some [example applications](docs/sample-applications.rst) built with this library.

