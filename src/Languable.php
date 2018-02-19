<?php

namespace SBKInfo\Languages;

trait Languable{

	public function translate($pathLang = null){

		$classLang = $this->parseClass();

		$objectLang = new $classLang();
		$arrayTranslate = $objectLang->translate();

		$pathLang = $this->parseLangPath(
			$pathLang,
			$classLang
		);

		$arrayLanguages = $this->parseTranslate(
			$arrayTranslate,
			$pathLang
		);

		return $arrayLanguages;

	}

	private function parseLangPath($pathLang, $classLang){

		$classLang = substr(strrchr(get_called_class(), '\\'), 1);
		$classLang = substr($classLang, 0, -10);
		$classLang = strtolower($classLang);

		if($pathLang)
			$pathLang = str_replace(
				'.',
				'/',
				$pathLang
			);
		else
			$pathLang = $classLang;

		return $pathLang . '.';;

	}

	private function parseTranslate($arrayTranslate = array(), $pathLang){
		
		foreach($arrayTranslate as $keyTrans => $valueTrans)
			if(!is_numeric($keyTrans))
				$arrayLanguages[$keyTrans] = $valueTrans;
			else
				$arrayLanguages[$valueTrans] = trans(
					$pathLang.$valueTrans
				);
				
		return @$arrayLanguages ?: array();

	}

	private function parseClass(){

		$namespaceClassLang = 'App\Languages\\';

		$namespaceClassPos = strrpos(get_called_class(), '\\');

		$classNameLang = substr(
			get_called_class(),
			$namespaceClassPos + 1
		);

		$classNameLang = str_replace(
			'Controller',
			null,
			$classNameLang
		);

		$classNameLang .= 'Languages';

		$classLang = $namespaceClassLang . $classNameLang;

		return $classLang;

	}

}
