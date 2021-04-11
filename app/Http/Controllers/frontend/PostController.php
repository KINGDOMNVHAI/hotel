<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\all\GetAPIService;
use App\Services\all\ListPostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $getAPI = new GetAPIService();
        $this->darkskyAPI = $getAPI->getAPIDarkSky();
    }

    public function blog()
    {
        // Public Services
        $listpost     = new ListPostService;
        $viewListPost = $listpost->listpost();

        return view('frontend.pages.blog', [
            'title'     => TITLE_FRONTEND_INDEX,

            'darkskyAPI' => $this->darkskyAPI,

            'listpost'  => $viewListPost,
        ]);
    }

    public function post($urlPost)
    {
        // Public Services
        $detailpost     = new ListPostService;
        $viewDetailPost = $detailpost->detailpost($urlPost);

        return view('frontend.pages.post', [
            'title'      => TITLE_FRONTEND_INDEX,

            'darkskyAPI' => $this->darkskyAPI,

            'detailpost' => $viewDetailPost,
        ]);
    }
}
