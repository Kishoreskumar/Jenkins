<?php namespace Jnyberg\Testo\Facades;

use Illuminate\Support\Facades\Facade;

class Testo extends Facade {

	/**
	* Get the registered name of the component.
	*
	* @return string
	*/
	protected static function getFacadeAccessor() { 
		return 'testo';
	}

}