<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class corporate_member extends Model
{
    public function corporate_field()
    {
        return $this->belongsTo(Corporate_Member::class);
    }

}
