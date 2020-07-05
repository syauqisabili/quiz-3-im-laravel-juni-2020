<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArtikelModel{

    //equiv to SELECT * FROM tb_articles;
    public static function getAllData(){
        return DB::table('tb_articles')->get();
    }

    public static function insertData($data){
        //unset key '_token' and its value  pada array assoc $data
        unset($data['_token']);
        $data['tb_user_id'] = 1;
        $data['created_at'] = Carbon::now(); //equiv ->format('Y-m-d H:m:s');
        DB::table('tb_articles')->insert($data);
    }

    public static function findDataById($id){
        return DB::table('tb_articles')->where("id", '=', $id)->first();
    }

    public static function updateDataById($data, $id){
        $data['updated_at'] = Carbon::now(); //equiv ->format('Y-m-d H:m:s');
        $data['user_id'] = 1;
        return DB::table('tb_articles')->where("id", "=", $id)->update(
            [
                'judul'         => $data['judul'],
                'isi'           => $data['isi'],
                'slug'          => $data['slug'],
                'tag'           => $data['tag'],
                'tb_user_id'    => $data['user_id'],
                'updated_at'    => $data['updated_at']
            ]
        );
    }

    public static function deleteDataById($id){

        DB::table('tb_articles')->where("id", "=", $id)->delete();
    }
}
