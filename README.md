
## Using this skeleton (remove this section after you have completed these steps)

First clone this repo to your development machine and remove the `.git` directory. Next run `git init` to create another repo. Create a new repo on GitHub (or another source control saas) and point the origin remote of your cloned repo to the one you just created. Here's an example: `git remote add origin git@github.com:facade/newly-created-repo.git`. Commit all files and push to master.

Next replace these variables in all files of the project and delete this paragraph:
 - `Marcel Pociot` (example: 'Marcel Pociot')
 - `mpociot` (example: 'mpociot')
 - `marcel@flareapp.io` (example: 'marcel@flareapp.io')
 - `ignition-self-diagnosis` (example: 'ignition-stack-overflow')
 - `Perform self diagnosis checks within your Ignition error page` (example: 'A tab to fetch stackoverflow answers')
 - `facade` (example: 'facade')
 - `Facade` (example: 'Facade')
 - `SelfDiagnosis` (example: 'StackOverflowTab')
 - `Self Diagnosis` (example: 'Stack Overflow')
 
 Next run `composer install`, `yarn` and `yarn production`.
 
 To use the tab in a Laravel app add this line in the `require` section of `composer.json`.
 
 ```
    "facade/ignition-self-diagnosis": "*",
```
 
 In your Laravel app add a `repositiories` section to the `composer.json` with the path to your package repo.
 
 ```
     "repositories": [
         {
             "type": "path",
             "url": "../your-new-package-repo"
         },
```
 
Now you're ready to develop your package inside a Laravel app. 
 
**When you are done with the steps above delete everything above!**

# Perform self diagnosis checks within your Ignition error page

[![Latest Version on Packagist](https://img.shields.io/packagist/v/facade/ignition-self-diagnosis.svg?style=flat-square)](https://packagist.org/packages/facade/ignition-self-diagnosis)
[![Build Status](https://img.shields.io/travis/facade/ignition-self-diagnosis/master.svg?style=flat-square)](https://travis-ci.org/facade/ignition-self-diagnosis)
[![Quality Score](https://img.shields.io/scrutinizer/g/facade/ignition-self-diagnosis.svg?style=flat-square)](https://scrutinizer-ci.com/g/facade/ignition-self-diagnosis)
[![Total Downloads](https://img.shields.io/packagist/dt/facade/ignition-self-diagnosis.svg?style=flat-square)](https://packagist.org/packages/facade/ignition-self-diagnosis)


This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tab here.

## Installation

You can install the package in to a Laravel app that uses [Ignition](https://flareapp.io) via composer:

```bash
composer require facade/ignition-self-diagnosis
```

## Usage

Click on the "Self Diagnosis" tab on your Ignition screen to see the tool provided by this package.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email marcel@flareapp.io instead of using the issue tracker.

## Credits

- [Marcel Pociot](https://github.com/mpociot)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
