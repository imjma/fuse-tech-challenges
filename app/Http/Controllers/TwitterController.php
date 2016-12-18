<?php

namespace App\Http\Controllers;

class TwitterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Connect to twitter api to do searching with the keyword
     *
     * @param $keyword
     * @param int $count
     * @return \Illuminate\Http\JsonResponse
     */
    public function query($keyword, $count = 10)
    {
        //  routes already handle it
        // if keyword is empty, skip api request and return
        if (empty($keyword)) {
            return response()->json([]);
        }

        // twitter connection
        $connection = app(\TwitterConnection::class);

        $statuses = $connection->get("search/tweets", ["count" => $count, "q" => $keyword]);

        return response()->json($statuses);
    }

}
