<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 16:01
 */

namespace App\Http\Controllers;


use App\Province;

class ProvinceController extends Controller
{

    public function index($id)
    {
        $data = Province::find($id);

        $output = [
            'status' => true,
            'data' => $data
        ];

        return response()->json($output);
    }

}