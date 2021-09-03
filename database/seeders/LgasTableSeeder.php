<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [
            1, 1, 1, 1, 1, 1, 
            2, 2, 2, 2, 
            3, 3, 3, 3, 3, 3,
            4, 4, 4,
        ];

        $lgas = [ 'Changamwe', 'Jomvu', 'Kisauni', 'Likoni', 'Mvita', 'Nyali', 'Kinango', 'Lunga Lunga', 'Matuga', 'Msambweni', 'Ganze', 'Kaloleni', 'Kilifi', 'Magarini', 'Malindi', 'Rabai', 'Bura', 'Galole', 'Garsen',
        ];

        for($i=0; $i<count($lgas); $i++){
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }

}
