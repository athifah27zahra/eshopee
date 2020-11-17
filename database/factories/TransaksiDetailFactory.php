<?php

namespace Database\Factories;

use App\Models\Transaksi_Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi_Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaksi_id' => Transaksi::factory(),
            'barang_id' => Barang::factory(),
            'harga_beli' => $this->faker->randomNumber(),
            'jumlah' => $this->faker->numberBetween(1, 1000),
            'discount' => 0
        ];
    }
}
