<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data for permissions table
        $data = [
            
            //For Menu System
            ['name' => 'academic-access-controll'],
            ['name' => 'student-access-controll'],
            ['name' => 'attendance-access-controll'],
            ['name' => 'examination-access-controll'],
            ['name' => 'user-permission-access-controll'],
            ['name' => 'report-access-controll'],

            ['name' => 'dashboard'],
            
            //For Class System...
            ['name' => 'class-access'],
            ['name' => 'class-list'],
            ['name' => 'class-create'],
            ['name' => 'class-show'],
            ['name' => 'class-edit'],
            ['name' => 'class-delete'],
            
            //For Section System...
            ['name' => 'section-access'],
            ['name' => 'section-list'],
            ['name' => 'section-create'],
            ['name' => 'section-show'],
            ['name' => 'section-edit'],
            ['name' => 'section-delete'],
           
            //For Subject System...
            ['name' => 'subject-access'],
            ['name' => 'subject-list'],
            ['name' => 'subject-create'],
            ['name' => 'subject-show'],
            ['name' => 'subject-edit'],
            ['name' => 'subject-delete'],
            
            //For Teacher System...
            ['name' => 'teacher-access'],
            ['name' => 'teacher-list'],
            ['name' => 'teacher-create'],
            ['name' => 'teacher-show'],
            ['name' => 'teacher-edit'],
            ['name' => 'teacher-delete'],
            
            //For Student System...
            ['name' => 'student-access'],
            ['name' => 'student-list'],
            ['name' => 'student-create'],
            ['name' => 'student-show'],
            ['name' => 'student-edit'],
            ['name' => 'student-delete'],
           
            //For Exam System...
            ['name' => 'exam-access'],
            ['name' => 'exam-list'],
            ['name' => 'exam-create'],
            ['name' => 'exam-show'],
            ['name' => 'exam-edit'],
            ['name' => 'exam-delete'],
            
            //For Result System...
            ['name' => 'results-access'],
            ['name' => 'results-list'],
            ['name' => 'results-create'],
            ['name' => 'results-show'],
            ['name' => 'results-edit'],
            ['name' => 'results-delete'],

            ['name' => 'student-result-access'],
            
            //For Attendance System...
            ['name' => 'attendance-access'],
             
            //For student-Payment-Report System...
            ['name' => 'student-payment-report-access'],
            
            //For Role System...
            ['name' => 'role-access'],
            ['name' => 'role-list'],
            ['name' => 'role-create'],
            ['name' => 'role-show'],
            ['name' => 'role-edit'],
            ['name' => 'role-delete'],

            //For User System...
            ['name' => 'user-access'],
            ['name' => 'user-list'],
            ['name' => 'user-create'],
            ['name' => 'user-show'],
            ['name' => 'user-edit'],
            ['name' => 'user-delete']

            

        ];
        Permission::insert($data);







        
        //Data for role user pivot
        $dev = User::where('email', 'systemadmin@gmail.com')->first();
        $data = [
            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => $dev->id],
            ['role_id' => 2, 'model_type' => 'App\Models\User', 'model_id' => 2],
            ['role_id' => 3, 'model_type' => 'App\Models\User', 'model_id' => 3],
        ];
        \DB::table('model_has_roles')->insert($data);

        //Data for role permission pivot
        $permissions = Permission::all();
        foreach ($permissions as $key => $value) {
            $data = [
                ['permission_id' => $value->id, 'role_id' => 1],
            ];

            \DB::table('role_has_permissions')->insert($data);
        }
    }
}
