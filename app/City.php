<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 15:40
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table='city';

    protected $fillable = [
        'provinsi_id','provinsi','type','city_name','postal_code'
    ];

}