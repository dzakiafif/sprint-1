<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 15:42
 */

namespace App\Console\Commands;


use App\City;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class CityCommand extends Command
{

    protected $signature="post:city";

    protected $description="post all data city from rajaongkir city to database";

    public function handle()
    {
        try{
            $value = env('app_url_city');

            $client = new Client(['headers'=>['key'=>env('app_key_rajaongkir')]]);

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
            $this->info('all data has been posted to database');
        }catch (\Exception $e) {
            $this->info('an error occured');
        }
    }

}