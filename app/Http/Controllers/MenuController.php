<?php

namespace App\Http\Controllers;

use App\Models\Serving;
use Mpdf\Mpdf;

class MenuController extends Controller
{
    public function index()
    {
        $servings = Serving::all();

        return view(
            'menu.index',
            [
                "servings" => $servings,
            ]
        );
    }

    public function details($servingID)
    {
        $serving = Serving::find($servingID);

        return view(
            'menu.details',
            [
                "serving" => $serving,
            ]
        );
    }

    public function makepdf()
    {
        define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));
        require_once(__ROOT__ . '\vendor\autoload.php');

        $servings = Serving::all();

        $mpdf = new Mpdf();
        $mpdf->WriteHTML('<h2>De Gouden Draak</h2><h1>Menu</h1>');
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
                        </tr>
                        </thead>
                        <tbody>');


        foreach ($servings as $serving) {
            $mpdf->WriteHTML('
                    <tr>
                                    <th>' . $serving->id . '</th>
                                    <th>' . $serving->number . '</th>
                                    <td>' . $serving->name . '</td>
                                    <td>' . $serving->description . '</td>
                                    <td>' . $serving->spice . '</td>
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
