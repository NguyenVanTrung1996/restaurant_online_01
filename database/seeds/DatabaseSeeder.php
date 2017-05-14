<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        // $this->call(UsersTableSeeder::class);
//        DB::table('persons')->insert
//        ([
//           'name'=> str_random(10),
//            'email'=> str_random(3).'@gmail.com',
//            'password'=>bcrypt('vantrung'),
//            'phone'=>'123467586',
//            'sex'=>'Nam',
//            'brithday'=>'19961222',
//            'avatar'=>"hinh1.jpg",
//            'address'=>"Bac Giang",
//            'role'=>0,
//        ]);
        $this->call(personSeeder::class);
        $this->call(productSeeder::class);
        $this->call(slideseeder::class);
    }
}
class personSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 50; $i++)
        {
            DB::table('persons')->insert(
                [
                    'name' => str_random(10),
                    'email' => str_random(3) . '@gmail.com',
                    'password' => bcrypt('vantrung'),
                    'phone' => '123467586',
                    'sex' => 'Nam',
                    'brithday' => '19961222',
                    'avatar' => "hinh1.jpg",
                    'address' => "Bac Giang",
                    'role' => 0,
                ]
            );
        }
    }
}

class productSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 50; $i++)
        {
            DB::table('products')->insert
            ([
                'name' => str_random(8),
                'avatar' => 'hinh' . rand(),
                'price' => rand(0, 100) / 5,
                'discrible' => str_random(100),
                'type' => str_random(15),
                'status' => rand(0, 1),
                'is_hot' => rand(0, 1),
                'rate_point' => rand(14, 20) / 4,
                'rate_count' => rand(100, 200),
                'comment_count' => rand(100, 500),
            ]);
        }
    }
};
class slideseeder extends Seeder
{

};