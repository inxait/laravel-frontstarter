<?php

namespace Inxait\Frontstarter;

use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
	public function boot()
    {
        if (!file_exists(resource_path('.frontstarter'))) {
            //package.json
            if (file_exists(base_path('package.json'))) {
                unlink(base_path('package.json'));
            }

            $this->publishes([__DIR__.'/../stubs/package.json' => base_path('package.json')]);

            //js
            if (file_exists(resource_path('assets/js'))) {
                $this->removeDirectory(resource_path('assets/js'));
            }

            $this->publishes([__DIR__.'/../stubs/assets/js' => resource_path('assets/js')]);

            //sass
            if (file_exists(resource_path('assets/sass'))) {
                $this->removeDirectory(resource_path('assets/sass'));
            }

            $this->publishes([__DIR__.'/../stubs/assets/sass' => resource_path('assets/sass')]);

            //views
            if (file_exists(resource_path('views'))) {
                $this->removeDirectory(resource_path('views'));
            }

            $this->publishes([__DIR__.'/../stubs/views' => resource_path('views')]);

            //frontstarter
            $this->publishes([__DIR__.'/../stubs/.frontstarter' => resource_path('.frontstarter')]);
        }
    }

    protected function removeDirectory($path) {
        $files = glob($path . '/*');

        foreach ($files as $file) {
            is_dir($file) ? $this->removeDirectory($file) : unlink($file);
        }

        rmdir($path);
        return;
    }
}
