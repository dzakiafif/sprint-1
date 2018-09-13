<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 16:03
 */

namespace App\Http\Controllers;


use App\City;

class CityController extends Controller
{

    public function index($id)
    {
        $data = City::find($id);

        $output = [
            'status' => true,
            'data' => $data
        ];

        return response()->json($output);
    }

}