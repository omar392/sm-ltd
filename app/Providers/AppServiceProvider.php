<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Cover;
use App\Models\Fast;
use App\Models\Insurance;
use App\Models\News;
use App\Models\Partner;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cover = Cover::first();
        $seo = Seo::first();
        $counter = Counter::first();
        $setting = Setting::first();
        $about = About::first();
        $partners = Partner::where(['active'=>1])->get();
        $insurance = Insurance::where(['active'=>1])->get();
        $blogs = Blog::where(['active'=>1])->get();
        $services = Service::where(['active'=>1])->get();
        $news = News::where(['active'=>1])->get();
        $fasts = Fast::where(['active'=>1])->get();


        view()->share('cover', $cover);
        view()->share('seo', $seo);
        view()->share('counter', $counter);
        view()->share('setting', $setting);
        view()->share('about', $about);
        view()->share('partners', $partners);
        view()->share('blogs', $blogs);
        view()->share('services', $services);
        view()->share('news', $news);
        view()->share('insurance', $insurance);
        view()->share('fasts', $fasts);


        Paginator::useBootstrap();
    }
}