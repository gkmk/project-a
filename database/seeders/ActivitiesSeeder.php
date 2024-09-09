<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    use WithoutModelEvents;

    public static $ACTIVITIES = [
        'Football',
        'Basketball',
        'Baseball',
        'Tennis',
        'Volleyball',
        'Swimming',
        'Cycling',
        'Running',
        'Golf',
        'Rugby',
        'Hockey',
        'Badminton',
        'Table Tennis (Ping Pong)',
        'Skiing',
        'Snowboarding',
        'Martial Arts (e.g., Karate, Judo)',
        'Boxing',
        'Wrestling',
        'Lacrosse',
        'Rowing',
        'Surfing',
        'Rock Climbing',
        'Gymnastics',
        'Track and Field (Athletics)',
        'Fencing',
    ];

    public function run(): void
    {
        foreach (self::$ACTIVITIES as $activity) {
            Activity::firstOrCreate(['name' => $activity]);
        }
    }
}
