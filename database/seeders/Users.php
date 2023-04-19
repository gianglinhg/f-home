<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
use Str;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $day = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28];
        $month = [2, 3, 4, 5, 6, 7, 8];
        $ho = ['Nguyễn', 'Trần', 'Tần', 'Từ', 'Lý', 'Lê', 'Đoàn', 'Bùi', 'Võ'];
        $dem = ['Văn', '', 'Thị', 'Nguyên', 'Khôi', 'Tiến', 'Minh', 'Ngọc', 'Kim'];
        $ten = ['Ánh', 'Bảo', 'Sơn', 'Anh', 'Thảo', 'Tú', 'Ly', 'Tiến', 'Phương'];
        // DB::table('users')->insert(
        //     [
        //         'name' => 'Từ Nguyên Khôi',
        //         'email' => 'khoitnps15595@fpt.edu.vn',
        //         'password' => bcrypt('p@ss12345'),
        //         'created_at' => '2023-' . Arr::random($month) . '-' . Arr::random($day) . ' 09:32:26',
        //     ]
        // );
        DB::table('users')->insert(
            [
                'name' => 'Đường Duy Tân',
                'email' => 'tanddps15156@fpt.edu.vn',
                'password' => bcrypt('p@ss12345'),
                'created_at' => '2023-' . Arr::random($month) . '-' . Arr::random($day) . ' 09:32:26',
            ]
        );
        DB::table('users')->insert(

            [
                'name' => 'Đoàn Văn Thành',
                'email' => 'Thanhdvps15017@fpt.edu.vn',
                'password' => bcrypt('p@ss12345'),
                'created_at' => '2023-' . Arr::random($month) . '-' . Arr::random($day) . ' 09:32:26',
            ],
        );
        DB::table('users')->insert(

            [
                'name' => 'Phan Thế Dương',
                'email' => 'duongptph14649@fpt.edu.vn ',
                'password' => bcrypt('p@ss12345'),
                'created_at' => '2023-' . Arr::random($month) . '-' . Arr::random($day) . ' 09:32:26',
            ],
        );
        DB::table('users')->insert(

            [
                'name' => 'Giang Văn Linh',
                'email' => 'linhgvps14900@fpt.edu.vne',
                'password' => bcrypt('p@ss12345'),
                'created_at' => '2023-' . Arr::random($month) . '-' . Arr::random($day) . ' 09:32:26',
            ],
        );
        // for($i = 0; $i < 5; $i++) {
        //     $fullname = Arr::random($ho) . ' ' . Arr::random($dem) . ' ' . Arr::random($ten);
        //     DB::table('users')->insert(
        //         [
        //             'name' => $fullname,
        //             'email' => Str::random(10).'@gmail.com',
        //             'password' => bcrypt('p@ss12345'),


        //             'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
        //         ]
        //     );
        // }
    }
}