<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','barber_id', 'service_id', 'appointment_date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');    
    }

    public function barber()
    {
        return $this->belongsTo(User::class, 'barber_id', 'id');    
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');    
    }

}
