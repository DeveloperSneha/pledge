<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateSuggestion extends Model {

    protected $primaryKey = 'idSuggestion';
    protected $table = 'candidate_suggestion';
    protected $fillable = ['idCandidate','suggestion'];

    
    public function candidate() {
        return $this->belongsTo(Candidate::class, 'idCandidate', 'idCandidate');
    }
}
