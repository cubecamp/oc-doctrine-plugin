<?php namespace Cubecamp\Doctrine;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

	public function pluginDetails()
	{
		return [
			'name'        => 'Doctrine plugin',
			'description' => 'Doctrine plugin for OctoberCMS',
			'author'      => 'CubeCamp, pittss',
			'icon'        => 'icon-leaf'
		];
	}


	public function register() {
		$this->app->register(\MarkTopper\DoctrineDBALTimestampType\Laravel5ServiceProvider::class);
	}

}
