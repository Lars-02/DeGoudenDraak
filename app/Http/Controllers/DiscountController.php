<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Serving;
use Carbon\Carbon;
use Mpdf\Mpdf;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Offer::where('ending_at', '>=', Carbon::now())->get();

        return view(
            'discounts',
            [
                "discounts" => $discounts,
            ]
        );
    }
}
