<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateRecommandation extends Model {

    protected $primaryKey = 'idRecommend';
    protected $table = 'candidate_recommendation';
    protected $fillable = ['idCandidate','referenceName','email','mobile','idSector','comment'];
    
    
    public function candidate() {
        return $this->belongsTo(Candidate::class, 'idCandidate', 'idCandidate');
    }
    
    public function sector() {
        return $this->belongsTo(Sector::class, 'idSector', 'idSector');
    }
}
