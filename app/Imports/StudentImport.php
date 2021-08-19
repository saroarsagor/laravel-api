<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Http\Request;

class StudentImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new Student([
            'name' => $row['name'],
            'mobile' => $row['mobile'],
            'guardian_name' => $row['guardian_name'],
            'guardian_mobile' => $row['guardian_mobile'],
            'gender' => $row['gender'],
            'student_type' => $row['student_type'],
            'fees' => $row['fees'],
            'address' => $row['address'],
            'date_of_birth' => date('Y-m-d', $row['date_of_birth']),
        ]);
    }
}
