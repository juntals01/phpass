# Openwall Phpass, Laravel extension

### Description

This is a laravel extension of Portable PHP password hashing framework by Openwall. [http://www.openwall.com/phpass/](http://www.openwall.com/phpass/ "http://www.openwall.com/phpass/") to further check the functionalities.

### How to use

- Include in your file 

```shell
composer require juntals01/phpass
```

then, in your php file include by;

```php
use Juntals01\Phpass\PhpassHelper;
```

### function

#### passwordHash
returns instance of phpass openwall library with parameter Iteration, portablehashes.

- Iteration count: 8
- portablehashes: true

```php
PhpassHelper::passwordHash()
```

#### passwordVerify

returns true if plaintext is the hash equivalent
or false if not

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