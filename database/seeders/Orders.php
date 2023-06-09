<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Arr;
use Str;

class Orders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ho = ['Nguyễn', 'Trần', 'Tần', 'Từ', 'Lý', 'Lê', 'Đoàn', 'Bùi', 'Võ','Đường','Âu'];
        $dem = ['Văn', 'Bảo', 'Thị', 'Nguyên', 'Khôi', 'Tiến', 'Minh', 'Ngọc', 'Kim','Duy','Ngọc'];
        $ten = ['Ánh', 'Bảo', 'Sơn', 'Anh', 'Thảo', 'Tú', 'Ly', 'Tiến', 'Phương','Linh','Tân'];
        $status = ['Đang chờ duyệt', 'Đang giao hàng', 'Giao thành công'];
        $day = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28];
        $month = [2,3,4,5,6,7,8];
        for($i = 0; $i < 5; $i++){
            $fullname = Arr::random($ho) . ' ' . Arr::random($dem) . ' ' . Arr::random($ten);
            DB::table('orders')->insert([
                'user_id' => rand(1, 10),
                'address' => 'Hồ Chí Minh',
                'phone' => "0123456789",
                'code' => Str::random(10),
                'status' => Arr::random($status),
                'total' => rand(2000000, 10000000),
                'created_at' => '2023-'.Arr::random($month).'-'.Arr::random($day) .' 09:32:26',
            ]);
    }
}
}