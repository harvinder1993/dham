<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
		'user_id',
		'name',
		'email',
		'phone',
		'address',
		'estd',
		'contact_person',
        'helping_center_id'
	];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

	public function products()
    {
        return $this->hasMany(Product::class, 'organization_id');
    }

    public function helping_center()
    {
        return $this->belongsTo(HelpingCenter::class, 'helping_center_id');
    }
}
