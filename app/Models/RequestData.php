<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class RequestedData extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'requesting';
    protected $primaryKey = 'id';

    protected $fillable = ['email_sender',
                            'email_receiver',
                            'status',
                            'created_at',
                            'updated_at',
                            'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}