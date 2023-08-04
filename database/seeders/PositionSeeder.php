<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;use Illuminate\Database\Seeder;
use App\Models\Department;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = Department::where('status', 'active')->get();
        foreach($department as $dep)
        {
            if($dep->department == 'Nursing')
            {
                $position = ['Nursing Assistant', 'LPN', 'RN', 'Nursing Admin'];
                foreach($position as $pos)
                {
                    DB::table('positions')->insert([
                        'department_id' => $dep->id,
                        'position' => $pos,
                        'status' => 'active'
                    ]);
                }
            }
            if($dep->department == 'Admissions')
            {
                $position = ['Admissions Director', 'Admissions Coordinator', 'Hospital / External Liason'];
                foreach($position as $pos)
                {
                    DB::table('positions')->insert([
                        'department_id' => $dep->id,
                        'position' => $pos,
                        'status' => 'active'
                    ]);
                }
            }
            if($dep->department == 'Social Services')
            {
                $position = ['Social Services Director', 'Licensed Social Worker', 'Social Work Assistant'];
                foreach($position as $pos)
                {
                    DB::table('positions')->insert([
                        'department_id' => $dep->id,
                        'position' => $pos,
                        'status' => 'active'
                    ]);
                }
            }
            if($dep->department == 'Maintenance')
            {
                $position = ['Maintenance Director', 'Maintenace Assistant'];
                foreach($position as $pos)
                {
                    DB::table('positions')->insert([
                        'department_id' => $dep->id,
                        'position' => $pos,
                        'status' => 'active'
                    ]);
                }
            }
            if($dep->department == 'Houskeeping')
            {
                $position = ['Houskeeping Director', 'Houskeeping Aide', 'Laundry Aide'];
                foreach($position as $pos)
                {
                    DB::table('positions')->insert([
                        'department_id' => $dep->id,
                        'position' => $pos,
                        'status' => 'active'
                    ]);
                }
            }
            if($dep->department == 'Dietary')
            {
                $position = ['Dietary Director', 'Dietary Aide', 'Cook '];
                foreach($position as $pos)
                {
                    DB::table('positions')->insert([
                        'department_id' => $dep->id,
                        'position' => $pos,
                        'status' => 'active'
                    ]);
                }
            }
        }
    }
}
