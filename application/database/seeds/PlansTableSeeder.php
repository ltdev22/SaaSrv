<?php

use SaaSrv\Models\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'gateway_id' => 'month_6',
                'title' => 'Monthly',
                'slug' => 'monthly',
                'information' => json_encode([
                    '2 GB of storage',
                    'Email support',
                    'Help center access',
                ]),
                'price' => 6.00,
                'active' => true,
                'teams_enabled' => false,
                'teams_limit' => null,
            ],
            [
                'gateway_id' => 'year_60',
                'title' => 'Yearly',
                'slug' => 'yearly',
                'information' => json_encode([
                    'Save £12 from the monthly plan',
                    '2 GB of storage',
                    'Email support',
                    'Help center access',
                ]),
                'price' => 60.00,
                'active' => true,
                'teams_enabled' => false,
                'teams_limit' => null,
            ],
            [
                'gateway_id' => 'team_month_55',
                'title' => 'Monthly for 10 users',
                'slug' => 'monthly-for-10-users',
                'information' => json_encode([
                    'Up to 10 users included',
                    '15 GB of storage',
                    'Phone and email support',
                    'Help center access',
                ]),
                'price' => 55.00,
                'active' => true,
                'teams_enabled' => true,
                'teams_limit' => 10,
            ],
        ];

        DB::table('plans')->truncate();

        Plan::insert($plans);
    }
}
