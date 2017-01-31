<?php

namespace App;

use App\CaseStudyPhoto;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
    	'name',
    	'header',
    	'intro',
    	'fact',
    	'text_left',
    	'text_right',
    	'active'
    ];

    /**
     * A Case Study is comprises of one photo
     * @return Illuminate\Database\Eloquent\Relationships\HasOne
     */
    public function case_study_photo()
    {
        return $this->hasOne(CaseStudyPhoto::class);
    }

    public function addPhoto(CaseStudyPhoto $photo)
    {
        $this->case_study_photo()->delete();
        
        return $this->case_study_photo()->save($photo);
    }
}
