<?php
namespace App\Helpers\FurnitureStore;

use Illuminate\Support\Facades\DB;

class Permission{

    public static function permission($data){
       foreach ($data as $val){
           echo "<option value='$val->id'>$val->name</option>";
       }
    }
}
