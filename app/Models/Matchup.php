<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchup extends Model
{
    use HasFactory;
    protected $guarded = [];
  /**
     * Get all of the comments for the Matchup
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Odds()
    {
        return $this->hasMany(Matchup_odd::class, 'matchup_id');
    }
    public function latestOdds()
    {
        return $this->hasOne(Matchup_odd::class, 'matchup_id')->orderby("LastUpdated","desc");
    }
}
