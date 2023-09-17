# PHP Symbols

Contains lists of PHP symbols such as class names, INI values, function names, phpinfo() output, etc for each PHP version.

This list is [built](https://github.com/PHPWatch/symbol-data-builder/) automatically daily.

## Usage cases

This data can be used to determine if a given PHP symbol is available and valid for a given PHP version.

For example, to figure out of `str_starts_with` is available in a PHP version, look the `%version%/function.php` file for the function.

The main use case this data was built in the first place to work on a CanIUse-style lookup for PHP. This is work-in-progress at [PHP.Watch](https://php.watch).