<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentTag extends Model
{
    use HasFactory;


    protected $table = 'document_tags';

    public function tags()
    {
        return $this->hasMany(Tag::class, 'id', 'tag_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class,'id', 'document_id');
    }
}
