<?php

namespace Valschr\ImageRenderer;

use Statamic\Providers\AddonServiceProvider;
use Valschr\ImageRenderer\Commands\GenerateBlurhashStrings;
use Valschr\ImageRenderer\Tags\ResponsiveImageTag;


class ServiceProvider extends AddonServiceProvider
{
	public function boot() {
		parent::boot();
		$this->publishes([
			__DIR__.'/../config/statamic-image-renderer.php' => config_path('statamic/statamic-image-renderer.php'),
		], 'statamic-image-renderer');
	}
	protected $commands = [
		GenerateBlurhashStrings::class,
	];
	protected $tags = [
		ResponsiveImageTag::class,
	];
}
