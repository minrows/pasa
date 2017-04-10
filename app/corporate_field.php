<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class corporate_field extends Model
{
    public function corporate_member()
    {
        return $this->hasMany(Corporate_Member::class);
    }
}
