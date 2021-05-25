<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use Searchable;
    
    public function quotes() {
        //A Tag belongs to many Quotes
        return $this->belongsToMany(Quote::class);
        
    }

    public function projects() {
        //A Tag belongs to many Projects
        return $this->belongsToMany(Project::class);
        
    }
}
