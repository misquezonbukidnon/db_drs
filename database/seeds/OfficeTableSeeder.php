<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('office_models')->insert([
        	[
        		'office_name' => 'MMO-Personal Staff'
        	],
        	[
        		'office_name' => 'MMO-Civil Security Unit'
        	],
        	[
        		'office_name' => 'MMO-Public Affairs, Information and Assistance Division'
        	],
        	[
        		'office_name' => 'MMO-Permits and Licenses Division'
        	],
        	[
        		'office_name' => 'MMO-General Services Office'
        	],
        	[
        		'office_name' => 'MMO-Livelihood Division'
        	],
        	[
        		'office_name' => 'MMO-Nutrition Division'
        	],
        	[
        		'office_name' => 'MMO-Population Development Division'
        	],
        	[
        		'office_name' => 'MMO-Economic Enterprise Division'
        	],
        	[
        		'office_name' => 'MMO-Barangay Affairs Division'
        	],
        	[
        		'office_name' => 'MMO-Municipal Disaster Risk Reduction and Management Office'
        	],
            [
                'office_name' => 'MMO-Management Information System Division'
            ],
        	[
        		'office_name' => 'MMO-Human Resource Management Office'
        	],
        	[
        		'office_name' => 'Office of the Sangguniang Bayan'
        	],
        	[
        		'office_name' => 'Municipal Planning and Development Office'
        	],
        	[
        		'office_name' => 'Municipal Budget Office'
        	],
        	[
        		'office_name' => 'Municipal Accountant Office'
        	],
        	[
        		'office_name' => 'Municipal Treasurer Office'
        	],
        	[
        		'office_name' => 'Municipal Engineer Office'
        	],
        	[
        		'office_name' => 'Municipal Assessor Office'
        	],
        	[
        		'office_name' => 'Municipal Health Office'
        	],
        	[
        		'office_name' => 'Municipal Agriculture Office'
        	],
        	[
        		'office_name' => 'Municipal Civil Registrar Office'
        	],
        	[
        		'office_name' => 'Municipal Social Welfare and Development Office'
        	],
        	[
        		'office_name' => 'Municipal Environment and Natural Resources Office'
        	],
        	[
        		'office_name' => 'Commission On Audit'
        	],
        	[
        		'office_name' => 'Commission On Elections'
        	],
        	[
        		'office_name' => 'Philippine National Police'
        	],
        	[
        		'office_name' => 'Bureau of Fire Protection'
        	],        	        	        	        	        	
        	[
        		'office_name' => 'Department of Interior Local Government'
        	]
        ]);
    }
}
