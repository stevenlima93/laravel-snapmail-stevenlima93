<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create("fr");
        for ($i= 0; $i<10; $i++){
            $message= new \App\Message();
            $message->created_at= $faker->dateTime("now",null);
            $message->message= $faker->text;
            $message->photo_url= $faker->imageUrl(300, 300);
            $message->code= sha1(\Illuminate\Support\Str::random(10));
            $message->save();
        }
    }
}
