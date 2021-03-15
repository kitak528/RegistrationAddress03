<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserInfo extends Model
{
    protected $table = 'UserInfo';
    protected $guarded = array('loginId');
    public $timestamps = true;

    public function getData()
    {
        $data = DB::table($this->table)->get();

        return $data;
    }
}
