<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teams;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = factory(Teams::class)->create([
            'name' => 'CodeTisans'
        ]);


        $user = factory(User::class)->create([
                'name' => 'Almae',
                'last_name' => 'Hangad',
                'team_id' => $team->id,
                'email' => 'test@example.com'
        ]);

        $user->assignRole('team_lead');

        $user = factory(User::class)->create([
            'name' => 'IJ',
            'last_name' => 'Patrick',
            'team_id' => $team->id,
            'email' => 'test117@example.com'
        ]);

        $user->assignRole('user');

    }
}
