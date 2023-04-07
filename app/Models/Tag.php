<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = [
        "title",
        "code"
    ];

    public function documents(){
        return $this->belongsToMany(Tag::class, 'document_tags', 'tag_id', 'document_id');
    }
}
