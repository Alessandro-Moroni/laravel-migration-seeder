<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();
        $new_train->slug = $this->generateSlug($new_train->agency);
        $new_train->agency = 'Italo';
        $new_train->departure_station = 'Milano';
        $new_train->arrival_station = 'Roma';
        $new_train->departure_time = '14.00';
        $new_train->arrival_time = '17.00';
        $new_train->train_code = 'it300';
        $new_train->number_carriages = '7';
        $new_train->seat_number = '4';

        $new_train->save();
    }

    private function generateSlug($sring){
        $slug = Str::slug($sring, '-');
        $original_slug = $slug;

        $exist = Train::where('slug', $slug)->first();
        $counter = 1;

        while($exist){
            $slug = $original_slug . '-' . $counter;
            $exist = Train::where('slug', $slug)->first();
            $counter++;

        }
        return $slug;

    }
}
