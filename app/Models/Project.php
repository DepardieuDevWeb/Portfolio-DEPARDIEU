<?php

namespace App\Models;

use App\Models\Picture;
use App\Models\Technology;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'description',
        'meta_description',
        'project_url',
        'github_url',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // protected static function booted()
    // {
    //     static::creating(function($project){
    //         $project->slug = Str::slug($project->title);
    //     });

    //     static::updating(function($project){
    //         $project->slug = Str::slug($project->title);
    //     });
    // }

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'technology_project', 'technology_id', 'project_id');
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }

    /**
     * @param UploadedFile[] $files
     */
    public function attachFiles(array $files, int|string|null $featured)
    {
        $pictures = [];
        foreach ($files as $index => $file) {
            if ($file->getError()) {
                continue;
            }
            $filename = $file->store('projects/' . $this->id, 'public');
            $pictures[] = [
                'filename' => $filename,
                'position' => $index,
                'is_featured' => $index == $featured
            ];
        }
        if (count($pictures) > 0) {
            $this->pictures()->createMany($pictures);
        }
    }

    public function getPicture(): ?Picture
    {
        return $this->pictures[0] ?? null;
    }

    public function featuredPicture()
    {
        return $this->pictures()->where('is_featured', 1)->first();
    }

    public function pictureOrdered()
    {
        return $this->pictures()->orderBy('position');
    }

    public function exerpt()
    {
        return substr($this->description, 0, 60) . '...';
    }
}
