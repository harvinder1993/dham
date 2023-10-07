<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpingCenter extends Model
{
    use HasFactory;

    protected $fillable = [
		'name',
		'address',
        'phone',
		'description',
		'user_id'
	];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
