<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Picture extends Model
{
    protected $fillable = ['filename', 'is_featured', 'position'];

    protected static function booted(): void
    {
        static::deleting(function (Picture $picture) {
            Storage::disk('public')->delete($picture->filename);
        });
    }

    public function getImageUrl(?int $width = null, ?int $height = null): string
    {
        if ($width === null) {
            // return Storage::disk('public')->url($this->filename);
            $baseUrl = 'https://portfolio-depardieu-production.up.railway.app/storage/';
            return $baseUrl . $this->filename;
        }
    }
}
