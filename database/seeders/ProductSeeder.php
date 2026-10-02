<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::firstOrCreate(
            ['slug' => 'flanges'],
            [
                'name' => 'فلنج',
                'description' => 'انواع فلنج‌های صنعتی',
                'is_active' => true,
                'sort_order' => 1,
            ]
        );

        $product = Product::firstOrCreate(
            ['sku' => 'VR-FL-PN16-001'],
            [
                'category_id' => $category->id,
                'name' => 'فلنج استیل PN16',
                'slug' => 'stainless-steel-flange-pn16',
                'description' => 'فلنج استیل صنعتی PN16 مناسب برای کاربردهای مختلف تأسیساتی و صنعتی.',
                'short_description' => 'فلنج استیل PN16',
                'unit' => 'عدد',
                'is_active' => true,
                'sort_order' => 1,
            ]
        );

        $product->variants()->firstOrCreate(
            ['sku' => 'VR-FL-PN16-001'],
            [
                'name' => 'فلنج استیل PN16',
                'price' => 0,
                'is_active' => true,
                'sort_order' => 1,
            ]
        );
    }
}