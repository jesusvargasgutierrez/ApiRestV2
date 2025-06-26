<?php

namespace App\Http\Controllers\Ws;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Traits\Validation\{ Methods };
//use App\Http\Requests\CartRequest;
use App\Models\{ Contact, MailContact, PhoneContact, AddressContact };

class ApiController extends Controller
{
    function listrecord(Request $req){

        $record = config('models.Mainmodels')[$req->get("EndpointName")]::orderBy('id','DESC')->get();

        return response()->json($record);
    }

    function getrecord(Request $req){
        $pivotcolumn = config('models.EndpointName')[$req->get("EndpointName")];

        $record = config('models.Mainmodels')[$req->get("EndpointName")]::where('id',$req->id)
                  ->get()->toArray();

        $record = array("information" => $record);

        foreach (config('models.RelationsModels')[$req->get("EndpointName")] as $key => $value) {
            $relations = config('models.'.$value)::where([
                            $pivotcolumn => $req->id
                         ])->get()->toArray();

            $relations = array($value => $relations);

            $record = array_merge($record, $relations);
        }

        return response()->json($record);
    }

    function getrecordwhere(Request $req){
        $jsonwhere = $req->where;

        //$arraywhere = array_merge(...$jsonwhere);

        //dd($arraywhere);

        $arraywhere = json_decode($jsonwhere, true)[0];

        $pivotcolumn = config('models.EndpointName')[$req->get("EndpointName")];

        $record = config('models.Mainmodels')[$req->get("EndpointName")]::where($arraywhere)
                  ->get()->toArray();

        $record = array("information" => $record);

        foreach (config('models.RelationsModels')[$req->get("EndpointName")] as $key => $value) {
            $relations = config('models.'.$value)::where([
                            $pivotcolumn => $req->id
                         ])->get()->toArray();

            $relations = array($value => $relations);

            $record = array_merge($record, $relations);
        }

        return response()->json($record);
    }

    function insertrecord(Request $req){
        $methodvalidate = new Methods();
        $pivotcolumn = config('models.EndpointName')[$req->get("EndpointName")];
        $modelname = config('models.Mainmodels')[$req->get("EndpointName")];
        $datareq = $req->all();

        $arrayprop;
        $mainfields;

        foreach ($datareq as $key => $value) {
            if(!is_array($value)){
                $arrayprop[$key] = $value;
            }
        }

        foreach (config('models.Mainfields')[$req->get("EndpointName")] as $key => $value) {
            $mainfields[$value] = $req->get($value);

            foreach (config('models.Validations')[$req->get("EndpointName")] as $keyv => $field) {
                if($field == $value){
                    $mainfields[$value] = $methodvalidate->rnvaluevalidated($field,$req->get($value));
                }
            }
        }

        $mainmodel = $modelname::create($mainfields);

        foreach ($datareq as $key => $value) {
            if(is_array($value)){
                foreach ($req->get($key) as $md) {
                    config('models.'.$key)::create([
                        $pivotcolumn => $mainmodel->id,
                        strtolower($key) => $md,
                    ]);
                }
            }
        }
        
        return response()->json(['status' => 1]);
    }

    function updaterecord(Request $req){
        $pivotcolumn = config('models.EndpointName')[$req->get("EndpointName")];
        $datareq = $req->all();

        $record = config('models.Mainmodels')[$req->get("EndpointName")]::where('id',$req->id)
                  ->first();

        $mainfields;
        $arraymodel;

        foreach (config('models.Mainfields')[$req->get("EndpointName")] as $key => $value) {
            $mainfields[$value] = $req->get($value);
        }

        $record->update($mainfields);

        foreach ($datareq as $key => $value) {
            if(is_array($value)){
                $arraymodel = config('models.'.$key)::where([
                                $pivotcolumn => $req->id,
                              ]);
                
                $arraymodel->update([
                                'id_status' => 2
                            ]);
                
                foreach ($req->get($key) as $md) {
                    config('models.'.$key)::create([
                        $pivotcolumn => $req->id,
                        strtolower($key) => $md,
                    ]);
                }
            }
        }

        return response()->json(['status' => 1]);
    }

    function updaterecordwhere(Request $req){
        $methodvalidate = new Methods();
        $arraywhere = $req->where; 

        $flattenedArray = array_merge(...$arraywhere);
        
        $pivotcolumn = config('models.EndpointName')[$req->get("EndpointName")];
        $datareq = $req->all();

        $record = config('models.Mainmodels')[$req->get("EndpointName")]::where('id', $req->id)
                ->first();

        if (!$record) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        foreach (config('models.Mainfields')[$req->get("EndpointName")] as $key => $value) {
            //$flattenedArray[$value] = $req->get($value);

            foreach (config('models.Validations')[$req->get("EndpointName")] as $keyv => $field) {
                if($field == $value){
                    $flattenedArray[$value] = $methodvalidate->rnvaluevalidated($field,$req->get($value));
                }
            }
        }

        $record->update($flattenedArray);

        return response()->json($record);
    }
}
