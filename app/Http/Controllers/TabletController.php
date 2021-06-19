<?php

namespace App\Http\Controllers;

use App\Http\Requests\TabletLoginRequest;
use App\Models\Serving;
use App\Models\Table;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TabletController extends Controller
{
    public function login(TabletLoginRequest $request)
    {
        $searchNameQuery = '';
        $searchCategoryQuery = '';
        $tablenumber = $request->number;
        $servings = Serving::all();
        return view('tablet.menu', compact(['tablenumber', 'servings', 'searchNameQuery', 'searchCategoryQuery']));
    }

    public function sendHelp(Request $request)
    {
        $tablenumber = $request->tablenumber;
        $searchNameQuery = '';
        $searchCategoryQuery = '';
        $servings = Serving::all();

        $maxGuests = Table::where('id', '=', "$tablenumber")->first()->seats;
        DB::table('table_user')->insert([
            ['table_id' => $tablenumber,
                'user_id' => rand(1, count(User::all())),
                'start_time' => Carbon::now(),
                'duration' => Carbon::now()->addHours(2),
                'guests' => rand(1, $maxGuests),
                'help_request' => 1],
        ]);

        $this->function_alert("Er komt hulp aan!");
        return view('tablet.menu', compact(['servings', 'searchNameQuery', 'searchCategoryQuery', 'tablenumber']));
    }

    function function_alert($message) {
        echo "<script>alert('$message');</script>";
    }
}
