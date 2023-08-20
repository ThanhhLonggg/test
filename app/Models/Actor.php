<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;
    protected $table = 'artists';
    protected $primaryKey = 'id';
    protected $fillable = ['Firstname', 'Lastname', 'BirthDate','Img','Price','Description'];

    public function Request(): BelongsToMany
    {
        return $this->belongsToMany(Request::class);
    }
}
