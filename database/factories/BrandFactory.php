<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'              => 'iPhone 12',
            'description'           => 'Apple',
            'image'             => 'https://www.apple.com/v/iphone/home/ah/images/overview/compare/compare_iphone_12__f2x.png',
        ];
    }
}
