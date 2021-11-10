<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'subject',
        'message',
        'appointment_time'
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class,'patient_id');
    }
}
