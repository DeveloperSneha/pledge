<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRole extends Model
{
    protected $primaryKey = 'idJobRole';
    protected $table = 'jobrole';
    
    
    public function sectors() {
        return $this->belongsTo(Sector::class, 'idSector', 'idSector');
    }
}
