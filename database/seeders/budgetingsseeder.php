<?php

namespace Database\Seeders;

use App\Http\Controllers\Backend\BudgetController;
use App\Models\Budgeting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class budgetingsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Budgeting::create(
            [
                'keperluan' => 'makan tim sukses',
                'sumber' => 'bpk haryono',
                'wilayah' => 'slamaran',
                'nominal' => '1000000',
                'status' => '1',
            ]
        );
    }
}
