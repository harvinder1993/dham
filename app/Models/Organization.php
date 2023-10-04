<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Organization
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $estd
 * @property string|null $contact_person
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Organization extends Model
{
	protected $table = 'organizations';

	protected $fillable = [
		'name',
		'email',
		'phone',
		'address',
		'estd',
		'contact_person'
	];
}
