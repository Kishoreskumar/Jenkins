<?php namespace Jnyberg\Testo;

use Illuminate\Support\ServiceProvider;

class TestoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	* Bootstrap the application events.
	*
	* @return void
	*/
	public function boot()
	{
		$this->package('jnyberg/testo');
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Testo', 'Jnyberg\Testo\Facades\Testo');
		});

		$this->app['testo'] = $this->app->share(function($app)
		{
			return new Testo;
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('testo');
	}

}
