<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class SampleController extends Controller
{
    public function model() {
        $md = new UserInfo();
        $data = $md->getData();

        return view('sample.model', ['data' => $data]);
    }
}
