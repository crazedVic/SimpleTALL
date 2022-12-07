<?php

namespace App\Providers;

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
        // fake data for what we need
        $data = [
            [   "title" => "Topic 1",
                "body"=>"This is the body of topic 1",
                "comments"=>[[
                    "id" => 1,
                    "body"=>"Comment 1 body",
                    "author" => "Tammy",
                    "comments" => []
                ],
                [
                    "id" => 2,
                    "body"=>"Comment2 body",
                    "author" => "Ed",
                    "comments" => []
                    ]
                    ]
            ],
            [   "title" => "Topic 2",
                "body"=>"This is the body of topic 2",
                "comments"=>[
                    [
                        "id" => 3,
                        "body"=>"Comment 1 on Topic 2 body",
                        "author" => "Steve",
                        "comments" => []
                    ],
                    [
                        "id" => 4,
                        "body"=>"Comment 2 on Topic 2body",
                        "author" => "Terry",
                        "comments" => [
                            [
                                "id" => 5,
                                "body"=>"Comment on Comment 2 body",
                                "author" => "Steve",
                                "comments" => []
                            ]
                        ]
                    ]
                ]
            ]
        ];
        app()->instance("data", $data);
    }
}
