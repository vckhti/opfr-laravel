<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\CountryModel;

use Validator;

class CountryController extends Controller
{
    public function country() {
        return response()->json(CountryModel::get(),200);
    }

    public function countryById($id) {
        $country = CountryModel::find($id);
        if (is_null($country)) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }

        return response()->json($country,200);
    }

    public function countrySave(Request $req) {
        $rules = [
            'KabinetNumber' => 'required|min:|max:3',
            'Model' => 'required|min:3',
            'INV' => 'required|min:3',
            'Addres' => 'required|min:3'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $country = CountryModel::create($req->all());
        return response()->json($country,201);
    }

    public function countryEdit(Request $req, $id) {
        $rules = [
            'KabinetNumber' => 'required|min:|max:3',
            'Model' => 'required|min:3',
            'INV' => 'required|min:3',
            'Addres' => 'required|min:3'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }
        $country = CountryModel::find($id);
        if (is_null($country)) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        $country->update($req->all());
        return response()->json($country,200);
    }

    public function countryDelete(Request $req, $id) {
        $country = CountryModel::find($id);
        if (is_null($country)) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        $country->delete();
        return response()->json('',204);
    }
}
