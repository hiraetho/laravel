<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadCategory extends Model
{
    protected $table = 'download_category';

    protected $fillable = ['name', 'sort', 'area_code', 'status', 'memo', 'update_user', 'update_date'];
}
