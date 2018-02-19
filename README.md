# Cleanses

<p align="center">
    <img src="https://photos.app.goo.gl/ZgOTH9tZHCAyeMUH2" width="546">
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
