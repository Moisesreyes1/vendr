<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';
    public function vendor() {
        return $this->belongsTo('App\Vendor', 'vendor_id');
    }
}
