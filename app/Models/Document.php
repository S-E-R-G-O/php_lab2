<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';

    protected $fillable = [
        "title",
        "code",
        "content",
        "document_id",
        "author"
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'document_tags', 'document_id', 'tag_id');
    }
}
