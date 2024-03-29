<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\frontend\feHotel\ServicesService;

class ServiceController extends Controller
{
    public function listservice()
    {
        // Public Services
        $service     = new ServicesService;
        $viewListService = $service->listservice();
        // $viewDetailService = $service->detailservice($idService);

        return view('feHotel.pages.listservice', [
            'title'      => TITLE_FRONTEND_INDEX,

            'listservice'   => $viewListService,
            // 'detailservice' => $viewDetailService,
        ]);
    }

    public function service()
    {
        // Public Services
        $service     = new ServicesService;
    //     $viewListService = $service->listservice();
    //     // $viewDetailService = $service->detailservice($idService);

    //     return view('feHotel.pages.service', [
    //         'title'      => TITLE_FRONTEND_INDEX,

    //         'listservice'   => $viewListService,
    //         // 'detailservice' => $viewDetailService,
    //     ]);
    }
}
