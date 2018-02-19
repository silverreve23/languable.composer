<?php

namespace SBKInfo\Languages;

use Illuminate\Support\ServiceProvider;
use SBKInfo\Languages\Command;

class Provider extends ServiceProvider{

	protected $commands = array(
		Command::class
	);

	public function boot(){

		if($this->app->runningInConsole())
	        $this->commands($this->commands);

	}

}
