<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Ubigeo;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function ubigeoAutocomplete(Request $request)
    {
        $ubigCompletos = [];

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $ubigCompletos = Ubigeo::select(DB::raw("code, CONCAT(department, ', ', province, ', ', district) as ubigeo"))->whereRaw("CONCAT(department, ', ', province, ', ', district) LIKE '%$searchTerm%'")
                ->limit(30)->get();
        }
        return response()->json($ubigCompletos);
    }

    public function placeAutocomplete(Request $request)
    {
        $ubigCompletos = [];

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $ubigCompletos = Place::select('id', 'name')->whereRaw("name LIKE '%$searchTerm%'")
                ->limit(30)->get();
        }
        return response()->json($ubigCompletos);
    }

    public function apiDni($dni)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero=' . $dni,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $res = json_decode($response);

        return response()->json($res);
    }
}
