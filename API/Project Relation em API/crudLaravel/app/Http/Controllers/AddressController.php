<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller{
    public function index(Request $q){
        $address = Address::all();
        return $address;
    }

    public function findOne(Request $r){
        $id = $r->id;
        $address = Address::where('id', $id)->first();
        if(!empty($address)){
            return $address;
        }else{
            return 'Endereço Não Existente.';
        }
    }

    public function insert(Request $r){
        $rawData = $r->only(['address']);
        $address = Address::create($rawData);

        return $address;
    }
}
