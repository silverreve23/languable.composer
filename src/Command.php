<?php

namespace SBKInfo\Languages;

use Illuminate\Console\Command as BaseCommand;

class Command extends BaseCommand{

	protected $signature = "make:language {class}";
    private $pathLanguages = null;
    private $pathTranslates = null;
    private $pathStubClass = null;
    private $stubLanguageArray = null;
    private $stubTranslateClass = null;
    
	protected $description = 'Create language class.';

	public function __construct(){

		parent::__construct();
        
        $this->pathLanguages = base_path(
            'app/Languages'
        );
        
        $this->pathTranslates = base_path(
            'app/resources/lang'
        );
        
        $this->pathStubClass 
            = dirname(__FILE__)
            .'/../stubs/class.stub';
        
        $this->stubLanguageArray 
            = dirname(__FILE__)
            .'/../stubs/array.stub';

	}

	public function handle(){

		$message = "\nCreate language started!\n";
        
		$this->info($message);
        $this->parseClass();
        $this->createClass();
        $this->createLang();
        

	}
     
    private function parseClass(){
        
        $this->stubLanguageClass = file_get_contents(
            $this->pathStubClass
        );
        
        $this->stubLanguageClass = str_replace(
            'DummyClass',
            $class = $this->argument('class'),
            $this->stubLanguageClass
        );
        
    }  
    
    private function createClass(){
        
        $class = $this->argument('class');
        
        $nameLanguageClass = $this->pathLanguages
            .'/'
            .$class
            .'.php';
        
        $message = 'Error! This class name exist!';
        
        if(!file_exists($this->pathLanguages))
			mkdir($this->pathLanguages, 0777);			
			
		if(!file_exists($nameLanguageClass)){
                
			$message = "Create language finished!\n";
					
			file_put_contents(
				$nameLanguageClass, 
				$this->stubLanguageClass
			);
							
			$this->info($message);
						
		}else{
				
			$this->error($message);
							
		}
        
    }
    
    private function createLang(){
        
        $class = $this->argument('class');
        $class = strtolower($class);
        
        $nameTranslatesArray = $this->pathTranslates
            .'/'
            .$class
            .'.php';
        
        $message = 'Error! This file language name exist!';		
			
		if(!file_exists($nameTranslatesArray)){
                
			$message = "Create translate finished!\n";
					
			file_put_contents(
				$nameTranslatesArray, 
				$this->stubLanguageArray
			);
							
			$this->info($message);
						
		}else{
				
			$this->error($message);
							
		}
        
    }

}
