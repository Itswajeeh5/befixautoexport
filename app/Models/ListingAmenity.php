<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListingAmenity extends Model
{
    protected $fillable = [
        'listing_id',
        'amenity_id'
    ];

}
