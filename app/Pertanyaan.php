<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    // public static function up($data) {
    //   $update_item = DB::table('pertanyaans')->where('id', $data['id'])->update($data);
    //   return $update_item;
    // }
}
