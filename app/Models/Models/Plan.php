<?php

namespace App\Models\Models;


use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'url', 'price', 'description'];

    public function details()
    {

            return $this->hasMany(DetailPlan::class);
    }
    
    public function search($filter = null)
    {
        $results = $this->where('name', 'LIKE', "%{$filter}%")
                        ->orwhere('description', 'LIKE', "%{$filter}%")
                        ->paginate(1);
    
                return $results;
    }
}
