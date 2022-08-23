<?php

namespace App\Providers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($notices) {
            $notices->notice = \App\Models\Notice::orderBy('date', 'desc')->take(5)->get();
            // $notices->with('notice', \App\Models\Notice::all());
        });

        view()->composer('*', function ($events) {
            $events->with('event', \App\Models\Event::all());
        });

        view()->composer('*', function ($news) {
            $news->with('news', \App\Models\News::all());
            $news->with('archive', \App\Models\News::orderBy('created_at', 'desc')
                ->whereNotNull('created_at')
                ->get()
                ->groupBy(function (News $post) {
                    return $post->created_at->format('Y');
                })
                ->map(function ($item) {
                    return $item
                        ->sortByDesc('created_at')
                        ->groupBy(function (News $item) {
                            return $item->created_at->format('F');
                        });
                })
            );
        });

        view()->composer('*', function ($teachers) {
            $teachers->with('teachers', \App\Models\Teacher::all());
        });

        view()->composer('*', function ($quotations) {
            $quotations->with('quotations', \App\Models\Quotation::all());
        });

        view()->composer('*', function ($alumnis) {
            $alumnis->with('alumnis', \App\Models\Alumni::all());
        });

        view()->composer('*', function ($internships) {
            $internships->with('internships', \App\Models\Internship::all());
        });

        view()->composer('*', function ($scholarships) {
            $scholarships->with('scholarships', \App\Models\Scholarship::all());
        });

        view()->composer('*', function ($rankings) {
            $rankings->with('rankings', \App\Models\Ranking::all());
        });

        view()->composer('*', function ($message) {
            $message->with('message', \App\Models\Message::all());
        });

        view()->composer('*', function ($notification) {
            $notification->with('notifications', \App\Models\Notification::all());
        });

        view()->composer('*', function ($profile) {
            $profile->with('profile', \App\Models\Profile::all());
        });

        view()->composer('*', function ($fileuploads) {
            $fileuploads->with('fileuploads', \App\Models\FileUpload::latest()->get()->all());
        });

        Paginator::useBootstrap();
    }
}
