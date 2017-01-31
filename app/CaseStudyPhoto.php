<?php

namespace App;

use Image;
use App\CaseStudy;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CaseStudyPhoto extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
    	'name',
        'path',
        'thumbnail_path'
    ];

    /*
     * The base directory where Case Study photos are stored.
     *
     * @var string
     */
    protected $photosBaseDir = 'images/uploads/caseStudyImages';

    /**
     * A Photo belongs to a Case Study
     * @return Illuminate\Database\Eloquent\Relationships\BelongsTo
     */
    public function case_study()
    {
        return $this->belongsTo(CaseStudy::class);
    }

    /**
     * Build a new photo instance from a file upload
     * @param  string $name
     * @return self
     */
    public static function named($name)
    {
        return (new static)->saveAs($name);
    }

    protected function saveAs($name)
    {
        $this->name = sprintf("%s-%s", time(), $name);
        $this->path = sprintf("%s/%s", $this->photosBaseDir, $this->name);
        $this->thumbnail_path = sprintf("%s/tn-%s", $this->photosBaseDir, $this->name);

        return $this;
    }

    public function move(UploadedFile $file)
    {
        $file->move($this->photosBaseDir, $this->name);

        $this->makeThumbnail();

        return $this;
    }

    protected function makeThumbnail()
    {
        Image::make($this->path)
            ->resize(480, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($this->thumbnail_path); // save() is an Image Intervention method, not Laravels.
    }

    public function delete()
    {
        \File::delete([
            $this->path,
            $this->thumbnail_path
        ]);

        parent::delete();
    }
}
