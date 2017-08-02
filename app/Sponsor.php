<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //
    public function getType(){
        if ($this->type_sponsorship == 1) {
            return "Fresh Money";
        }else if ($this->type_sponsorship == 2) {
            return "In-Kind";
        }else if ($this->type_sponsorship == 3) {
            return "Media Partner";
        }
    }
}
