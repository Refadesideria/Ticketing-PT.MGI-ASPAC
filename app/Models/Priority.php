<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Priority extends Model
{
    use HasFactory;
    use Sortable;
    protected $fillable = ['name'];
    public $sortable = [
       'name'
    ];
    public $timestamps = true;
   
    public function ticketing()
  {
    return $this->hasMany(Ticketing::class, 'id_priority');
  }
}
