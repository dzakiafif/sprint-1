<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 12:46
 */

namespace App\Http\Controllers;


use App\City;
use App\Province;
use GuzzleHttp\Client;

class TestController extends Controller
{

    public function index() {
        $value = env('APP_URL_CITY');

        $client = new Client(['headers'=>['key'=>'0df6d5bf733214af6c6644eb8717c92c']]);

        $data = json_decode($client->request('GET',$value,['verify'=>false])->getBody());

        foreach ($data->rajaongkir->results as $item) {
            $newData = new City();
            $newData->id = $item->city_id;
            $newData->provinsi_id = $item->province_id;
            $newData->provinsi = $item->province;
            $newData->type = $item->type;
            $newData->city_name = $item->city_name;
            $newData->postal_code = $item->postal_code;

            $newData->save();
        }

        echo 'ok';




    }

}