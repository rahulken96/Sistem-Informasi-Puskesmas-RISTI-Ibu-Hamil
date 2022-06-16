<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


function getRoles($id){
    $result = DB::table('roles')->where([
        'id' => $id
    ])->get();

    return $result[0]->jabatan;
}
