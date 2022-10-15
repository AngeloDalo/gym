<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'daily',
                'sum' => 5
            ],
            [
                'name' => 'monthly',
                'sum' => 40
            ],
        ];

        foreach ($types as $type) {
            $newType = new Payment();
            $newType->type = $type['name'];
            $newType->sum = $type['sum'];
            $newType->save();
        }
    }
}
