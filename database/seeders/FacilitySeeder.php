<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            // Sample data for 50 records
            [
                'name' => 'Autumn Lake Healthcare at Alice Manor',
                'address' => '2095 Rockrose Ave',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21211',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Arcola',
                'address' => '901 Arcola Avenue',
                'city_id' => 10804,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '20902',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Arlington West',
                'address' => '3939 Penhurst Avenue',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21215',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Ballenger Creek',
                'address' => '347 Ballenger Center Drive',
                'city_id' => 3274,
                'state_id' => 6,
                'country_id' => 1,
                'zipcode' => '21703',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Baltimore Washington',
                'address' => '313 Hospital Drive',
                'city_id' => 10545,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21061',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Beloit ',
                'address' => '2121 Pioneer Drive',
                'city_id' => 8472,
                'state_id' => 17,
                'country_id' => 1,
                'zipcode' => '53511',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Berkeley Heights ',
                'address' => '35 Cottage St',
                'city_id' => 17293,
                'state_id' => 32,
                'country_id' => 1,
                'zipcode' => '7922',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Birch Manor',
                'address' => '7309 Second Avenue',
                'city_id' => 10638,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21784',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Braddock Heights',
                'address' => '6012 Jefferson Boulevard',
                'city_id' => 10697,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21703',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Bradford Oaks',
                'address' => '7520 Surratts Road',
                'city_id' => 460,
                'state_id' => 2,
                'country_id' => 1,
                'zipcode' => '20735',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Bridgepark',
                'address' => '4017 Liberty Heights Ave',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21207',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Bucks Hill',
                'address' => '2817 North Main Street',
                'city_id' => 3481,
                'state_id' => 7,
                'country_id' => 1,
                'zipcode' => '6704',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Calvert Manor',
                'address' => '1881 Telegraph Road',
                'city_id' => 7853,
                'state_id' => 16,
                'country_id' => 1,
                'zipcode' => '21911',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Catonsville',
                'address' => '16 Fusting Avenue',
                'city_id' => 10600,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21228',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Cherry Lane',
                'address' => '9001 Cherry Lane',
                'city_id' => 3625,
                'state_id' => 9,
                'country_id' => 1,
                'zipcode' => '20708',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Chesapeake Woods',
                'address' => '525 Glenburn Avenue',
                'city_id' => 5673,
                'state_id' => 13,
                'country_id' => 1,
                'zipcode' => '21613',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Chevy Chase',
                'address' => '8700 Jones Mill Road',
                'city_id' => 10778,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '20815',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Crofton',
                'address' => '2131 Davidsonville Road',
                'city_id' => 8868,
                'state_id' => 18,
                'country_id' => 1,
                'zipcode' => '21114',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Cromwell',
                'address' => '385 Main Street',
                'city_id' => 3441,
                'state_id' => 7,
                'country_id' => 1,
                'zipcode' => '6416',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Crystal Springs',
                'address' => '200 Whitman Avenue',
                'city_id' => 1358,
                'state_id' => 3,
                'country_id' => 1,
                'zipcode' => '26241',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Glade Valley',
                'address' => '56 West Frederick Street',
                'city_id' => 10719,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21793',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Glen Burnie',
                'address' => '7355 Furnace Branch Road East',
                'city_id' => 10545,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21060',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Greenfield',
                'address' => '5790 S 27Th St',
                'city_id' => 28275,
                'state_id' => 49,
                'country_id' => 1,
                'zipcode' => '53221',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Homewood',
                'address' => '6000 Bellona Avenue',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21212',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Loch Raven',
                'address' => '8720 Emge Road',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21234',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Long Green',
                'address' => '115 East Melrose Avenue',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21212',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Long View',
                'address' => '3332 Main Street',
                'city_id' => 2180,
                'state_id' => 5,
                'country_id' => 1,
                'zipcode' => '21102',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Memorial Bridge',
                'address' => '201 Fifth Avenue',
                'city_id' => 17211,
                'state_id' => 32,
                'country_id' => 1,
                'zipcode' => '08697',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at New Britain',
                'address' => '400 Brittany Farms Road',
                'city_id' => 3364,
                'state_id' => 7,
                'country_id' => 1,
                'zipcode' => '6053',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Norwalk',
                'address' => '34 Midrocks Drive',
                'city_id' => 2024,
                'state_id' => 5,
                'country_id' => 1,
                'zipcode' => '6851',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Oak Manor',
                'address' => '3415 Greencastle Road',
                'city_id' => 10793,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '20866',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Oakview',
                'address' => '2700 Barker Street',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '20910',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Oceanview',
                'address' => '2721 Route 9',
                'city_id' => 3633,
                'state_id' => 9,
                'country_id' => 1,
                'zipcode' => '8230',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Old Bridge',
                'address' => '111 Route 516 ',
                'city_id' => 17047,
                'state_id' => 32,
                'country_id' => 1,
                'zipcode' => '8857',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Overlea',
                'address' => '6116 Belair Road ',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21206',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Parkville',
                'address' => '8710 Emge Road',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21234',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Patuxent River',
                'address' => '14200 Laurel Park Drive',
                'city_id' => 3625,
                'state_id' => 9,
                'country_id' => 1,
                'zipcode' => '20707',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Perring Parkway',
                'address' => '1801 Wentworth Road',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21234',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Pikesville',
                'address' => '7 Sudbrook Lane',
                'city_id' => 10594,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21208',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Riverview',
                'address' => '1 Eastern Blvd',
                'city_id' => 2470,
                'state_id' => 5,
                'country_id' => 1,
                'zipcode' => '21221',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Ruxton/Towson',
                'address' => '7001 Charles Street',
                'city_id' => 10592,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21204',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Salem County',
                'address' => '438 Salem-Woodstown Road',
                'city_id' => 552,
                'state_id' => 2,
                'country_id' => 1,
                'zipcode' => '8079',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Silver Spring',
                'address' => '2501 Musgrove Road',
                'city_id' => 10804,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '20904',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Southgate',
                'address' => '449 South Pennsville-Auburn Road',
                'city_id' => 552,
                'state_id' => 2,
                'country_id' => 1,
                'zipcode' => '8069',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Spa Creek',
                'address' => '35 Milkshake Lane',
                'city_id' => 2739,
                'state_id' => 5,
                'country_id' => 1,
                'zipcode' => '21403',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Summit Park',
                'address' => '1502 Frederick Road',
                'city_id' => 10600,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21228',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Vineland',
                'address' => '1640 South Lincoln Avenue ',
                'city_id' => 16928,
                'state_id' => 32,
                'country_id' => 1,
                'zipcode' => '8361',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Voorhees {Promedica Voorhees West)',
                'address' => '1086 Dumont Circle ',
                'city_id' => 16872,
                'state_id' => 32,
                'country_id' => 1,
                'zipcode' => '8043',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare at Waugh Chapel',
                'address' => '1221 Waugh Chapel Road',
                'city_id' => 10543,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21054',
                'status'  => 'active'
            ],
            [
                'name' => 'Autumn Lake Healthcare Post-Acute Care Center',
                'address' => '5009 Frankford Avenue',
                'city_id' => 10559,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21206',
                'status'  => 'active'
            ],
            [
                'name' => 'King David Nursing and Rehabilitation Center',
                'address' => '4204 Old Milford Mill Road',
                'city_id' => 10594,
                'state_id' => 21,
                'country_id' => 1,
                'zipcode' => '21208',
                'status'  => 'active'
            ],
            [
                'name' => 'Nellas at Autumn Lake Healthcare',
                'address' => '499 Ferguson Road',
                'city_id' => 1358,
                'state_id' => 3,
                'country_id' => 1,
                'zipcode' => '26241',
                'status'  => 'active'
            ],
            [
                'name' => 'The Subacute at Autumn Lake Healthcare {Promedica Voorhees East)',
                'address' => '113 Route 73',
                'city_id' => 16872,
                'state_id' => 32,
                'country_id' => 1,
                'zipcode' => '8043',
                'status'  => 'active'
            ],
            
            
        ];

       
        if (DB::table('facilities')->get()->count() == 0) {
            DB::table('facilities')->insert($data);
        }
        
        
    }
}
