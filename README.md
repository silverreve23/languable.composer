# Languable Package

<p align="center">
    <img src="https://fthmb.tqn.com/wUBSdqKQkQA44cxzpEuzBNuZwxs=/4992x1750/filters:fill(auto,1)/hello-in-eight-different-languages-185250085-5941fb8c3df78c537b32ecac.jpg" width="546">
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

