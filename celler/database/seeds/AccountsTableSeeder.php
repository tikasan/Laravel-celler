<?php

use App\Base\BaseSeeder;
use App\Model\Accounts;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AccountsTableSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();

        for ($i = 0; $i < 30; $i++) {
            Accounts::create([
                'name' => $this->faker->name,
                'email' => $this->faker->email,
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::today()
            ]);
        }
    }
}
