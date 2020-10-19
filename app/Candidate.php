<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class Candidate extends Authenticatable
{
    use Notifiable;
   
    protected $primaryKey = 'idCandidate';
    protected $table = 'candidates';

    protected $fillable = ['name','email', 'isTestTaken', 'mobile', 'dob', 'address_location', 'gender','country','state','district','present_status','idWheebox','testUrl','testUrl2','resultUrl1','resultUrl2','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    

    public function setDobAttribute($date) {
        if (strlen($date) > 0)
            $this->attributes['dob'] = Carbon::createFromFormat('d-m-Y', $date);
        else
            $this->attributes['dob'] = null;
    }

    public function getDobAttribute($date) {
        // dd($date);
        if ($date && $date != '0000-00-00' && $date != 'null')
            return Carbon::parse($date)->format('d-m-Y');
        return '';
    }
    
    public function states() {
        return $this->belongsTo(State::class, 'state', 'idState');
    }
    
    public function districts() {
        return $this->belongsTo(District::class, 'district', 'idDistrict');
    }

}
