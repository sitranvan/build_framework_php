<?php

namespace App\Providers;

use App\Core\ServiceProvider;
use App\Core\View;

class DataProvider extends ServiceProvider
{
    public function boot()
    {
        $fakeData = ['fullname' => 'Tran Van Si'];
        View::share($fakeData);
    }
}
