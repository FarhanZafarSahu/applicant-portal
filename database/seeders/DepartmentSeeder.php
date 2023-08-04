<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;use Illuminate\Database\Seeder;
use App\Models\Facility;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facility = Facility::where('status', 'active')->get();
        
        foreach($facility as $fac)
        {
            $department = ['Nursing', 'Admissions', 'Social Services', 'Maintenance', 'Houskeeping', 'Dietary'];
            foreach($department as $dep)
            {
                DB::table('departments')->insert([
                    'facility_id' => $fac->id,
                    'department' => $dep,
                    'status' => 'active'
                ]);
            }
        }
    }
}
