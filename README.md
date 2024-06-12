# A (Laravel) PHP composer package for E-Boekhouden.nl

With this package you can easily integrate E-boekhouden.nl within any PHP project.  
If you wish to use this package and want to support future development.

View the original E-boekhouden [SOAP documentation](https://secure.e-boekhouden.nl/handleiding/Documentatie_soap.pdf).   

## Installation

You can install the package via composer:

```bash
composer require flarone/laravel-eboekhouden
```

## Usage (Examples)

``` php
require __DIR__ . '/vendor/autoload.php';

$username = 'username';
$sec_code_1 = 'sec_code_1';
$sec_code_2 = 'sec_code_2';

$client = new Flarone\EBoekhouden\Client($username, $sec_code_1, $sec_code_2);

// Get a SingleSignOnLink (AutoLogin)
$autoLogin = $client->autoLogin();

// Get all Articles
$articles = $client->getArticles();

// Get all Relations
$relations = $client->getRelations();

// Get all Mutations
$mutations = $client->getMutations();

// Get all Ledgers
$ledgers = $client->getLedgers();

// Get all Invoices
$invoices = $client->getInvoices();

// Get all Balances
$balances = $client->getBalances();
```

## Testing & building

To testing the package locally run:
``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email info@flarone.com instead of using the issue tracker.

## Credits

- [Flarone](https://github.com/flarone)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
