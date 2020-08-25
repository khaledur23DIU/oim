<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportData extends Model
{
    protected $table = 'import_data';

    protected $fillable = ['csv_filename', 'csv_header', 'csv_data'];
}
