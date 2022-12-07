<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
	protected $fillable = [
		'Month', 'Area', 'Territory','DBCode', 'DBName', 'OutletCode', 
 'SKUName', 'Pcs', 'Value',  'OutletName', 'DHCPName', 
        'Address', 'ContactNumber', 'Brand'  
	];
}
