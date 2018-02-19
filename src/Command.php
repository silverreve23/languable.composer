<?php

namespace SBKInfo\Languages;

use Illuminate\Console\Command;

class Command extends Command{

	protected $signature = "make:language {class}";
    private $pathLanguages = null;
    private $pathStubClass = null;
    private $stubLanguageClass = null;
    
	protected $description = 'Create language class.';

	public function __construct(){

		parent::__construct();
        
        $this->pathLanguages = base_path(
            'Languages'
        );
        
        $this->pathStubClass 
            = dirname(__FILE__)
            .'/../stubs/class.stub';

	}

	public function handle(){

		$message = "\nCreate language started!\n";
        
		$this->info($message);
        $this->parseClass();
        $this->createClass();
        

	}
     
    private function parseClass(){
        
        $this->stubLanguageClass = file_get_contents(
            $this->pathStubClass
        );
        
        $this->stubCleanseClass = str_replace(
            'DummyClass',
            $class = $this->argument('class'),
            $this->stubCleanseClass
        );
        
    }  
    
    private function createClass(){
        
        $class = $this->argument('class');
        
        $nameCleanseClass = $this->pathLanguages
            .'/'
            .$class
            .'.php';
        
        $message = 'Error! This class name exist!';
        
        if(!file_exists($this->pathLanguages))
			mkdir($this->pathLanguages, 0777);			
			
		if(!file_exists($nameCleanseClass)){
                
			$message = "Create language finished!\n";
					
			file_put_contents(
				$nameCleanseClass, 
				$this->stubCleanseClass
			);
							
			$this->info($message);
						
		}else{
				
			$this->error($message);
							
		}
        
    }

}
