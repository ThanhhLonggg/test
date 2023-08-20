<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $primaryKey = 'id';
    protected $fillable = ['Firstname', 'Lastname','artists_id','users_id'];

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function Artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
