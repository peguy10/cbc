<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUser implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'email' => $row[1],
            'matricule' => $row[2],
            'adresse' => $row[3],
            'phone' => $row[4],
            'bank' => $row[5],
            'hbd' => $row[6],
            'pays' => $row[7],
            'civilite' => $row[8],
            'typeAdherent_id' => $row[9],
            'photo' => $row[10],
            'password' => bcrypt($row[11]),

        ]);
    }
}
