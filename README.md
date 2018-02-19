# Cleanses

<p align="center">
    <img src="https://photos.google.com/photo/AF1QipPj6PXtaW5ivSdmIpWcW0jwDBciy-BV5bOTQPPi?sa=X&ved=0ahUKEwjNqI-C-rHZAhVD_KQKHQWqCyoQ9QEILzACUAE" width="546">
</p>

<p align="center">
    Languages package for laravel framework.
</p>

## How to install

Run this command in terminal

	composer require "sbkinfo/languable"

Include Languable in your controller

```php

class HomeController extends Controller{

	use SBKInfo\Languages\Languable;

}

```

## Example

```php

public function __construct(){

	$translate = $this->translate();

}

```

## Settings

:)
