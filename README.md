# Openwall Phpass, Laravel extension

### Description

This is a laravel extension of Portable PHP password hashing framework by Openwall. [http://www.openwall.com/phpass/](http://www.openwall.com/phpass/ "http://www.openwall.com/phpass/") to further check the functionalities.

### How to use

- on development
```shell
composer require jun/phpass (not yet working)
```

#### passwordHash
returns instance of phpass library with parameter
- Iteration count: 8
- prtablehashes: true

```php
PhpassHelper::passwordHash()
```

#### passwordVerify

returns true or false

```php
PhpassHelper::passwordVerify($plainText, $hash)
```

#### hash

hash a plain text. First parameter is plain text. Second is legacy compatibility with a default value "true".

```php
PhpassHelper::hash($plainText)
```

```php
PhpassHelper::hash($plainText, $legacyCompatibility = true)
```