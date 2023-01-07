<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisrequest extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = true;
   
    public function ticketing()
  {
    return $this->hasMany(Ticketing::class, 'id_jenisrequest');
  }
  // public function detail()
  // {
  //   return $this->hasOne(Detail::class, 'id_jenisrequest');
  // }
  public function projectcustomer()
  {
    return $this->hasMany(Projectcustomer::class, 'id_jenisrequest');
  }
}
