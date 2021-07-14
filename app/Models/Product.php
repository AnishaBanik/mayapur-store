<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public function subCategory(){
        return $this->belongsTo(Subcategory::class, "subCatId");
    }
    public function status(){
        return $this->belongsTo(Status::class, "statusId");
    }
}