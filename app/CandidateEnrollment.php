<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateEnrollment extends Model {

    protected $primaryKey = 'idEnrollment';
    protected $table = 'candidate_enrollment';
    protected $fillable = ['idCandidate', 'idDistrict', 'idScheme', 'idSector', 'idJobRole'];

    
    public function candidate() {
        return $this->belongsTo(Candidate::class, 'idCandidate', 'idCandidate');
    }
    public function district() {
        return $this->belongsTo(District::class, 'idDistrict', 'idDistrict');
    }
    public function scheme() {
        return $this->belongsTo(Scheme::class, 'idScheme', 'idScheme');
    }
    public function sector() {
        return $this->belongsTo(Sector::class, 'idSector', 'idSector');
    }
    public function jobrole() {
        return $this->belongsTo(JobRole::class, 'idJobRole', 'idJobRole');
    }
    
}
