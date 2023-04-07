<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Document;
use App\Models\DocumentTag;
use App\Models\Tag;
use Database\Factories\DocumentFactory;
use Database\Factories\TagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DocumentFactory::times(100)->create();
        TagFactory::times(100)->create();

        $documents = Document::paginate(100);

        foreach($documents as $document){
            $count = rand(1,5);

            for($i = 0; $i < $count; $i++){
                DocumentTag::create([
                    'document_id' => $document->id,
                    'tag_id' => rand(100/$count*$i + 1, 100/$count*($i+1))  ,
                ]);
            }
        }
    }
}
//