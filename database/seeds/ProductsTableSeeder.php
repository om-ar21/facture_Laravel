<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Products = new Products();

        $Products->product_id = "s01";
        $Products->product_name = "Salade";
        $Products->product_price = 10;
        $Products->product_qty = 100;
        $Products->save();


        $Products = new Products();

        $Products->product_id = "s02";
        $Products->product_name = "Tomate";
        $Products->product_price = 5;
        $Products->product_qty = 100;
        $Products->save();
        $Products = new Products();

        $Products->product_id = "s03";
        $Products->product_name = "Oignons";
        $Products->product_price = 8.99;
        $Products->product_qty = 100;
        $Products->save();
        $Products = new Products();

        $Products->product_id = "s04";
        $Products->product_name = "Pouleyyy";
        $Products->product_price = 17.99;
        $Products->product_qty = 100;
        $Products->save();
        $Products = new Products();

        $Products->product_id = "s05";
        $Products->product_name = "Salade de JM";
        $Products->product_price = 30;
        $Products->product_qty = 100;
        $Products->save();
        $Products = new Products();

        $Products->product_id = "s06";
        $Products->product_name = "Salade spécial anniversaire";
        $Products->product_price = 1000;
        $Products->product_qty = 100;
        $Products->save();
        $Products = new Products();

        $Products->product_id = "s07";
        $Products->product_name = "Salade sans sauce";
        $Products->product_price = 10;
        $Products->product_qty = 100;
        $Products->save();
        $Products = new Products();

        $Products->product_id = "s08";
        $Products->product_name = "Salade";
        $Products->product_price = 10;
        $Products->product_qty = 100;
        $Products->save();
    }
}
