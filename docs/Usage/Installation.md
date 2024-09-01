# Installation

## Installation with Composer

**[Composer](https://getcomposer.org) is required to install this package.**


### composer.json

Installation via [`composer.json`](https://getcomposer.org/doc/04-schema.md):

```json
{
	"require": {
		"php": "^8.1",
		"kista/php-library-template": "dev-main"
	}
}
```

Note: replace `dev-main` with a [version constraint](https://getcomposer.org/doc/articles/versions.md#writing-version-constraints), e.g. `^1.0` - see [releases](https://github.com/kista/php-library-template/releases) for valid versions.
In case you want to keep using `dev-main`, specify the hash of a commit to avoid running into unforseen issues, like so: `dev-main#cb69751c3bc090a7fdd2f2601bbe10f28d225f10`


### Terminal

To install `php-library-template` on the terminal, use:

```shell
composer require kista/php-library-template
```

If you want to install the package from a specific tag or commit, do as follows:

```shell
composer require kista/php-library-template:1.0.0
composer require kista/php-library-template:dev-main#f15b0afe9d4128bf734c3bf1bcffae72bf7b3e53
```


## Manual installation

Download the desired version of the package from [main](https://github.com/kista/php-library-template/archive/refs/heads/main.zip) or
[release](https://github.com/kista/php-library-template/releases) and extract the contents to your project folder.
After that, run `composer install` in the package root directory to install the required dependencies and generate `./vendor/autoload.php`.

Profit!


### Can i use this library without using composer?

You can, but it's absolutely not recommended, nor supported.

With that said, I'll leave you with this info:

- download the .zip for a version of your choice and also all required dependencies listed in the `composer.json` for that version (you can find links to the respective repos [on packagist](https://packagist.org/packages/kista/php-library-template))
- extract the files into your library folder
- include the files manually or with whatever autoloader you are using

Good luck!

