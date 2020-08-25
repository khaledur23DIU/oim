<?php

namespace App\Imports;

use App\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\headingRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class ContactImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
   
 

    // HeadingRowFormatter::default('none');
    public function model(array $row)
    {
        return new Contact([
            "first_name" => $row['first'],
            "last_name" => $row['last'],
            "email" => $row['email']
        ]);
    }

     public function headingRow(): int
    {
        return 1;
    }
}
