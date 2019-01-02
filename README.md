# Languable Package

[![Latest Stable Version](https://poser.pugx.org/sbkinfo/cleanses/v/stable)](https://packagist.org/packages/sbkinfo/cleanses)
[![Total Downloads](https://poser.pugx.org/sbkinfo/cleanses/downloads)](https://packagist.org/packages/sbkinfo/cleanses)
[![Latest Unstable Version](https://poser.pugx.org/sbkinfo/livereload/v/unstable)](https://packagist.org/packages/sbkinfo/livereload)
[![License](https://poser.pugx.org/sbkinfo/livereload/license)](https://packagist.org/packages/sbkinfo/livereload)
<p align="center">
	[![Daily Downloads](https://poser.pugx.org/sbkinfo/livereload/d/daily)](https://packagist.org/packages/sbkinfo/livereload)
	
    <img src="https://lh3.googleusercontent.com/kIES9CeD2TCoxIz_h2FwMGKTlMgkHkE_fBfPvlqnjoo6E5BOSwnZUqyuDszNf_5Lte2rmyhVmbhzc_iAFgIje4UJoIEY6D-sXNvcF3LDVsmV5G60TdQQxr6rm2thU2uDDhXUWDimCbkZlZ7L3N19FKx4JnhBcHz6MkmN1ZZH8JSe6X6m2roQVxmtUado0M9QN4-Ys-HcTDtidioGh_Z1x0SsBo_RUsodJiIyNROdZLryS2xSP3lfByUQS9hb3gHrkxGQ3yw3Rd1bGJwREiZSnL6hu6WKZBIK8nkg52OorkTY4qPC6Q0KoKZTjUEH2qqwFAtuAaNgF2g7tIABzFIoW1nLJSUN96EB4o0-TBxA1lvDF1fHDwZ-ABpoz1qGRMEnV6C84dW0RWfCiuqU3fDhHginNu1ZK1gS5SH4mLI-tSHRa1iH_MDy9G7-zSIws6UhHmZ2dKhpRM-jh_oR4ZVv5rUVe50hi17LXuvJZ0pCuBHj1XEkn9fJUwNpDfgcJmB2iDbPRFXjwdmCr8oaLpyoBXKoyYMnpsxcsLl4_SxMhR-ZcKoYmWba-r-s5d23in5Y-_dZMhTaZDP3vVmTaNRfzEC8eoEjnVo-rF1TbKQ=w900-h490-no" width="546">
</p>
<p align="center">
    Languages package for laravel framework.
</p>

## How to install

Run this command in terminal

	composer require "sbkinfo/languable"

Include ServiceProvider in config/app.php

```php

'providers' => array(

	SBKInfo\Languages\Provider::class,

)

```

Use Languable in your controller

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

If you want to use other translate language file (resources/lang)
you need pass to <b>translate</b> method
path to your custom file, default file path has name as
name Controller which was called in <b>translate</b> method

```php

public function __construct(){

	$translate = $this->translate('your-path');

}

```
Created file will be in <b>app/Languages</b> folder.

In order to create <b>Language</b> Class file, you need execute next command

	php artisan make:language Language

If you want to create translate file, you need execute command
with <b>--lang</b> option

	php artisan make:language Language --lang=transfile
