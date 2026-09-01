<?php

namespace App\Models\Traits\Validation;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\{ Auth, Session, Mail };
use SevenShores\Hubspot\Factory as HubspotFactory;
use Illuminate\Support\Facades\Storage;

class Methods
{
    function rnvaluevalidated($field, $value) {
        $return = "";

        if($field == "password"){
            $return = sha1($value);
        }

        return $return;
    }

    function saveimage($base64,$filename) {
        if (strpos($base64, 'base64,') !== false) {
            $base64 = explode('base64,', $base64)[1];
        }

        // Decodificar
        $contenidoZip = base64_decode($base64);

        // Guardar archivo
        $to = Storage::disk('local')->put('public/images/'.$filename.'.jpg',$contenidoZip);

        file_put_contents($to, $contenidoZip);
    }
}