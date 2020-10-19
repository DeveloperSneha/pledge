<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPartner extends Model
{
   protected $table = 'training_partner';
   
   public function scheme() {
        return $this->belongsTo(Schemes::class, 'idScheme', 'idScheme');
    }
    
    public function sector() {
        return $this->belongsTo(Sector::class, 'idSector', 'idSector');
    }
    
    public function jobrole() {
        return $this->belongsTo(JobRole::class, 'idJobRole', 'idJobRole');
    }
    
    public function district() {
        return $this->belongsTo(District::class, 'idDistrict', 'idDistrict');
    }
}