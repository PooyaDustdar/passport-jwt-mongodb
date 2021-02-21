Laravel MongoDB
===============

This package adds functionalities to the Eloquent model and Query builder for MongoDB, using the original Laravel API. *This library extends the original Laravel classes, so it uses exactly the same methods.*
- [Installation](#installation)

Installation
------------
Install the package via Composer:

```bash
$ composer require pdustdar/passport-jwt-mongodb
```
### Service Provider

add the service provider to `config/app.php`:

```php
Pdustdar\MongoPass\MongoPassServiceProvider::class,
```

Eloquent
--------

### Extending the base model
This package includes a MongoDB enabled Eloquent class that you can use to define models for corresponding collections.

```php
use Pdustdar\MongoPass\User as Authenticatable;

class User extends Authenticatable
{
    //
}
```
