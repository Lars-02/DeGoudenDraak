<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Serving;
use Carbon\Carbon;
use Mpdf\Mpdf;

class MenuController extends Controller
{

    public function makepdf()
    {
        define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));
        require_once(__ROOT__ . '\vendor\autoload.php');

        $servings = Serving::all();
        $servings->sortBy(function ($serving) {
            return $serving->category->name;
        });

        $discounts = Offer::where('ending_at', '>=', Carbon::now())->get();

        $mpdf = new Mpdf();

        $mpdf->WriteHTML('<h2>De Gouden Draak</h2><h1>Menu</h1><h3>(' . Carbon::now() . ')</h3>');
        $mpdf->WriteHTML('<div class="container">
                <div class="row justify-content-center">
                    <table class="table-auto bg-yellow-50 mx-auto">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nummer</th>
                            <th>Gerecht</th>
                            <th>Beschrijving</th>
                            <th>Pittigheid</th>
                            <th>Category</th>
                        </tr>
                        </thead>
                        <tbody>');
        foreach ($servings as $serving) {
            $mpdf->WriteHTML('
                    <tr>
                                    <td style="text-align:center">' . $serving->id . '</td>
                                    <td style="text-align:center">' . $serving->number . '</td>
                                    <td>' . $serving->name . '</td>
                                    <td>' . $serving->description . '</td>
                                    <td style="text-align:center">' . $serving->spice . '</td>
                                    <td style="text-align:center">' . $serving->category->name . '</td>
                                </tr>');
        }
        $mpdf->WriteHTML('                </tbody>
                    </table>
                </div>
            </div> <pagebreak/>');

        $mpdf->WriteHTML('<h2>De Gouden Draak</h2><h1>Aanbiedingen</h1><h3>(Geldig op: ' . Carbon::now() . ')</h3>');
                $mpdf->WriteHTML('<div class="container">
                        <div class="row justify-content-center">
                            <table class="table-fixed bg-yellow-50">
                                <thead>
                                <tr>
                                    <th class="w-1/8">ID</th>
                                    <th class="w-1/8">Prijs</th>
                                    <th class="w-3/8">Startdatum</th>
                                    <th class="w-3/8">Einddatum</th>
                                </tr>
                                </thead>
                                <tbody>');


                foreach ($discounts as $discount) {
                    $mpdf->WriteHTML('
                            <tr>
                                            <td style="text-align:center">' . $discount->id . '</td>
                                            <td style="text-align:center">&#8364;' . $discount->price . '</td>
                                            <td>' . $discount->start_at . '</td>
                                            <td>' . $discount->ending_at . '</td>
                                        </tr>');
                }

                $mpdf->WriteHTML('                </tbody>
                            </table>
                        </div>
                    </div>');
                $mpdf->Output('Menu.pdf', 'D');


        return redirect('menu');
    }
}
