<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            ['loaidouong.menu_general', 'loaidouong.menu_loai'],'App\Http\ViewComposers\loaidouongComposer'
        );
        View::composer(
            'timkiem.timkiem_loai', 'App\Http\ViewComposers\loaidouongComposer'
        );
        View::composer('timkiem.loai', 'App\Http\ViewComposers\loaidouongComposer@loai');
        View::composer('timkiem.taikhoan', 'App\Http\ViewComposers\taikhoan@taikhoan');
  //      View::composer('timkiem.hover', 'App\Http\ViewComposers\taikhoan@hover');
        View::composer('douong.banchaynhat', 'App\Http\ViewComposers\douongComposer@banchaynhat');
        // Using Closure based composers...
        View::composer('douong.khuyenmai', 'App\Http\ViewComposers\douongComposer@khuyenmai');
        View::composer('admin.thaydoi', 'App\Http\ViewComposers\thaydoiComposer@thaydoi');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}