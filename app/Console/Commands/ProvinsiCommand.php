<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 15:14
 */

namespace App\Console\Commands;


use App\Province;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class ProvinsiCommand extends Command
{

    protected $signature = "post:provinsi";

    protected $description = "post all data provinsi from rajaongkir provinsi to database";

    public  function handle()
    {
        try{
            $value = env('app_url_provinsi');

            $client = new Client(['headers'=>['key'=>env('app_key_rajaongkir')]]);

            $data = json_decode($client->request('GET',$value,['verify'=>false])->getBody());

            foreach ($data->rajaongkir->results as $item) {
                $newData = new Province();
                $newData->id = $item->province_id;
                $newData->nama = $item->province;

                $newData->save();
            }
            $this->info('all data has been posted to database');
        }catch (\Exception $e) {
            $this->info('an error occured');
        }
    }

}