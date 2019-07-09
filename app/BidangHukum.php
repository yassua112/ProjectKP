<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangHukum extends Model
{
    protected $table = 'bidang_hukum';
    protected $fillable = ['id_bid_hukum','nama_bid_hukum','keterangan'];

}
