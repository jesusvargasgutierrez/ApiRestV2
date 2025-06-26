<?php

namespace App\Models\Traits\Validation;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\{ Auth, Session, Mail };
use SevenShores\Hubspot\Factory as HubspotFactory;

class Methods
{
    function rnvaluevalidated($field, $value) {
        $return = "";

        if($field == "password"){
            $return = sha1($value);
        }

        return $return;
    }
}