<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'start_at', 'end_at'];

    protected $appends = ['duration'];

    public function getDurationAttribute()
    {
        $endAt = Carbon::createFromFormat('H:s:i', $this->attributes['end_at']);
        $startAt = Carbon::createFromFormat('H:s:i', $this->attributes['start_at']);

        return $endAt->diffInMinutes($startAt);
    }
}
