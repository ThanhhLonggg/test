<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $user1 = new \App\Models\User(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
            ]
        );

        $user1->password = bcrypt('admin');
        $user1->save();
        $user2 = new \App\Models\User(
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'role' => 'user',
            ]
        );

        $user2->password = bcrypt('user');
        $user2->save();

        // $artist1 = new \App\Models\Artist(
        //     [
        //         'FirstName' => 'Son',
        //         'LastName' => 'Tung',
        //         'Img' => 'https://vtv1.mediacdn.vn/thumb_w/650/2020/8/5/11707537937887109944759096401674123002289793o-1596615779281752133639-crop-1596615789986723827443.jpg',
        //         'BirthDate' => '1999',
        //         'Price'=> '1000',
        //         'Description' => 'The best singer in VietNam'

        //     ]
        // );
        // $artist1->save();
        // $artist2 = new \App\Models\Artist(
        //     [
        //         'FirstName' => 'Son',
        //         'LastName' => 'Tung',
        //         'Img' => 'https://vtv1.mediacdn.vn/thumb_w/650/2020/8/5/11707537937887109944759096401674123002289793o-1596615779281752133639-crop-1596615789986723827443.jpg',
        //         'BirthDate' => '1999',
        //         'Price'=> '1000',
        //         'Description' => 'The best singer in VietNam'

        //     ]
        // );
        // $artist2->save();
        // $artist3 = new \App\Models\Artist(
        //     [
        //         'FirstName' => 'Son',
        //         'LastName' => 'Tung',
        //         'Img' => 'https://vtv1.mediacdn.vn/thumb_w/650/2020/8/5/11707537937887109944759096401674123002289793o-1596615779281752133639-crop-1596615789986723827443.jpg',
        //         'BirthDate' => '1999',
        //         'Price'=> '1000',
        //         'Description' => 'The best singer in VietNam'

        //     ]
        // );
        // $artist3->save();
        // $artist4 = new \App\Models\Artist(
        //     [
        //         'FirstName' => 'Son',
        //         'LastName' => 'Tung',
        //         'Img' => 'https://vtv1.mediacdn.vn/thumb_w/650/2020/8/5/11707537937887109944759096401674123002289793o-1596615779281752133639-crop-1596615789986723827443.jpg',
        //         'BirthDate' => '1999',
        //         'Price'=> '1000',
        //         'Description' => 'The best singer in VietNam'

        //     ]
        // );
        // $artist4->save();
    }
}
