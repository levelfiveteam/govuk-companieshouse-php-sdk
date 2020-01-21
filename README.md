Companies House PHP SDK Kit
==========

This is the Companies House integration using PHP.

<sub>This repository is actively used in projects, and we will be maintaining it regularly.</sub>

[![Build Status](https://travis-ci.com/levelfiveteam/govuk-companieshouse-php-sdk.svg?token=42A9e8Yz9HCHugYVWyzW&branch=master)](https://travis-ci.com/levelfiveteam/govuk-companieshouse-php-sdk)
[![Total Downloads](https://poser.pugx.org/levelfiveteam/govuk-companieshouse-php-sdk/downloads.png)](https://packagist.org/packages/levelfiveteam/govuk-companieshouse-php-sdk)
[![Latest Stable Version](https://poser.pugx.org/levelfiveteam/govuk-companieshouse-php-sdk/v/stable.png)](https://packagist.org/packages/levelfiveteam/govuk-companieshouse-php-sdk)
[![Latest Unstable Version](https://poser.pugx.org/levelfiveteam/govuk-companieshouse-php-sdk/v/unstable.png)](https://packagist.org/packages/levelfiveteam/govuk-companieshouse-php-sdk)
[![Coverage Status](https://coveralls.io/repos/github/levelfiveteam/govuk-companieshouse-php-sdk/badge.svg?branch=master)](https://coveralls.io/github/levelfiveteam/govuk-companieshouse-php-sdk?branch=master)
[![License](https://poser.pugx.org/levelfiveteam/govuk-companieshouse-php-sdk/license.png)](https://packagist.org/packages/levelfiveteam/govuk-companieshouse-php-sdk)

## Instructions

This is the Companies House PHP SDK Kit that allows you to provide a full facility to access companies house, and verify companies.

1. Simply set your application to store the service as a factory;

```
$companiesHouse = new CompaniesHouse('api_key');
```

2. Create commands and queries as and when you need to (example below returns back a response to give you the API Version);

*Example query:*
```
$response = $companiesHouse->handle(new GetCompanyByCompanyNumber(['company_number' => '12341234']));
```

*Example Command:*
```
$command = new GetCompanyByCompanyNumber(['company_number' => '12341234']);
$company = $companiesHouse->handle($command);
```

You will not need to validate data using this service.  Validation happens at the command level.  Any validation errors will return as a `DomainException` with a json error message.  

The valid response will be an immutable object, with the option to see the the full response.

Important note; we are actively adding new commands.


Submitting bugs and feature requests
------------------------------------

Bugs and feature requests are tracked on [GitHub](https://github.com/levelfiveteam/govuk-companieshouse-php-sdk/issues).

We are actively updating the SDK Kit.

### Licence
You are free to reuse and adapt this content with credit, for non-commercial purposes.  Please review License for further information.
