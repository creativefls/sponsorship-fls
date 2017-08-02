<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function getType(){
        if ($this->type_sponsorship == 1) {
            return "Fresh Money";
        }else if ($this->type_sponsorship == 2) {
            return "In-Kind";
        }else if ($this->type_sponsorship == 3) {
            return "Media Partner";
        }
    }

    public function countAll(){
        return $this->count();
    }

    public function countFreshMoney(){
        return $this->where('type_sponsorship', '1')->count();
    }

    public function countInKind(){
        return $this->where('type_sponsorship', '2')->count();
    }

    public function countMediaPartner(){
        return $this->where('type_sponsorship', '3')->count();
    }
}
