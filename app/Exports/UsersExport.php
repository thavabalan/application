<?php

namespace App\Exports;
use App\Models\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('id',
        'name',
        'firstname',
        'email',
        'phone',
        'NIN',
        'father_name',
        'father_phone_number',
        'mother_name',
        'dob',
        'jamb_2020',
        'jamb_reg_no',
        'jambscore',
        'waecorneco',
        'primarschool',
        'state',
        'lga',
        'program')->get();
    }
    public function headings(): array
        {
            return [
                'Id',
                'Last Name',
                'First Name',
                'Email',
                'phone',
                'NIN',
                'father_name',
                'father_phone_number',
                'mother_name',
                'dob',
                'jamb',
                'jamb_reg_no',
                'jambscore',
                'waecorneco',
                'primaryschool',
                'state',
                'lga',
                'program'
                
            ];
        }
}
