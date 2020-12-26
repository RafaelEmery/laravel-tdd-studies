<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        static $bank_image;
        
        return [
            'title' => $this->company,
            'agency' => $this->randomNumber(3),
            'account_number' => $this->randomNumber(5),
            'balance' => $this->randomNumber(4),
            'balance_initial' => $this->randomNumber(4),
            'bank_id' => $this->numberBetween(1, 170),
            'bank_image' => $bank_image ?: $bank_image = 'none.jpg',
        ];
    }
}
