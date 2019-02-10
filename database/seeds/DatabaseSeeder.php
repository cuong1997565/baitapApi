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
        // $this->call(UsersTableSeeder::class);
        // $this->call(NotesTableSeeder::class);
        // $this->call(NotebooksTableSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(UserSeeder::class);

    }
}


class UserSeeder extends Seeder{
      public function run(){
          DB::table('users')->insert(
            [
        [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
        ],
         [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
        ],
         [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
        ],
            ]
        );
      }
}


class PostSeeder extends Seeder{
      public function run(){
          DB::table('posts')->insert(
            [
        [
            'title' => str_random(10),
            'body' => str_random(20),
            'user_id'=> 4,
        ],
        [
            'title' => str_random(10),
            'body' => str_random(20),
            'user_id'=> 4,
        ],
         [
            'title' => str_random(10),
            'body' => str_random(20),
            'user_id'=> 1,
        ]
            ]
        );
      }
}
