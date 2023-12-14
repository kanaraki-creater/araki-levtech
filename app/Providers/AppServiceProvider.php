<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
use Illuminate\Pagination\paginator;
>>>>>>> master

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
       Paginator::useBootstrap();  　　//動画

<<<<<<< HEAD

       // Paginator::useBootstrapFive();    　公式ドキュメント
       //または Paginator::useBootstrapFour();　　   公式ドキュメント
=======
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Paginator::useBootstrap();
>>>>>>> master
    }
}
