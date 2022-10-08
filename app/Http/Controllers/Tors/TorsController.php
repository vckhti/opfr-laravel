<?php

namespace App\Http\Controllers\Tors;

use App\Http\Controllers\Controller;
use App\Models\Models\TorsModel;
use Illuminate\Http\Request;

use Validator;

class TorsController extends Controller
{
    public function tors() {
        return response()->json(TorsModel::get(),200);
    }

    public function kabinetEdit(Request $req, $id) {
        $rules = [
            'KabinetNumber' => 'required|min:0|max:4'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $torsItem = TorsModel::find($id);
        if (is_null($torsItem)) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        $torsItem ->update($req->all());
        return response()->json($torsItem ,200);
    }
}
