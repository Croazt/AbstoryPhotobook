<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Photobook Magazine 30x30cm',
                'category' => 'Magazine',
                'price' => '750.000',
                'orientation' => '0',
                'description' => 'Magazine Photobook merupakan produk favorit, dengan jilid yang sempurna. Cocok untuk mengenang setiap kesempatan dan momen terindah dalam hidupmu, seperti Travelling, Baby Photoshoot, Reuni, Arisan, Portfolio, dan lain sebagainya. <br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi doff<br><br>Ketebalan kertas yang digunakan :<br>216gr<br><br>Jumlah halaman yang didapatkan :<br>24 Halaman<br><br>Rekomendasi jumlah foto :<br>75 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 30.000 / lembar (2 halaman)',
            ],
            [
                'name' => 'Photobook Magazine 20x30cm',
                'category' => 'Magazine',
                'price' => '345.000',
                'orientation' => '1',
                'description' => 'Magazine Photobook merupakan produk favorit, dengan jilid yang sempurna. Cocok untuk mengenang setiap kesempatan dan momen terindah dalam hidupmu, seperti Travelling, Baby Photoshoot, Reuni, Arisan, Portfolio, dan lain sebagainya. <br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi doff<br><br>Ketebalan kertas yang digunakan :<br>216gr<br><br>Jumlah halaman yang didapatkan :<br>24 Halaman<br><br>Rekomendasi jumlah foto :<br>65 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 25.000 / lembar (2 halaman)',
            ], 
            [
                'name' => 'Photobook Magazine 20x20cm',
                'category' => 'Magazine',
                'price' => '320.000',
                'orientation' => '0',
                'description' => 'Magazine Photobook merupakan produk favorit, dengan jilid yang sempurna. Cocok untuk mengenang setiap kesempatan dan momen terindah dalam hidupmu, seperti Travelling, Baby Photoshoot, Reuni, Arisan, Portfolio, dan lain sebagainya. <br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi doff<br><br>Ketebalan kertas yang digunakan :<br>216gr<br><br>Jumlah halaman yang didapatkan :<br>24 Halaman<br><br>Rekomendasi jumlah foto :<br>55 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 20.000 / lembar (2 halaman)',
            ], 
            [
                'name' => 'Photobook Magazine 15x20cm',
                'category' => 'Magazine',
                'price' => '245.000',
                'orientation' => '1',
                'description' => 'Magazine Photobook merupakan produk favorit, dengan jilid yang sempurna. Cocok untuk mengenang setiap kesempatan dan momen terindah dalam hidupmu, seperti Travelling, Baby Photoshoot, Reuni, Arisan, Portfolio, dan lain sebagainya. <br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi doff<br><br>Ketebalan kertas yang digunakan :<br>216gr<br><br>Jumlah halaman yang didapatkan :<br>24 Halaman<br><br>Rekomendasi jumlah foto :<br>45 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 20.000 / lembar (2 halaman)',
            ], 
            [
                'name' => 'Photobook Premium 20x30cm',
                'category' => 'Premium',
                'price' => '550.000',
                'orientation' => '2',
                'description' => 'Premium Photobook memberi tampilan spread penuh tanpa terpotong halaman, sehingga foto indah Anda dapat tertampang luas dan jelas. Dengan ketebalan kertas 520gr, photobook jenis ini akan awet tidak bisa terlipat dan tahan air. Laminasi doff di tiap halaman membuat foto Anda semakin terlihat jernih dan tajam. Cocok digunakan untuk mengabadikan momen sekali seumur hidup seperti Prewedding, Wedding, Sweet17, Golden Anniversary, Wisuda, dan lain-lain.<br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi hot press<br><br>Ketebalan kertas yang digunakan :<br>520gr + laminasi doff<br><br>Jumlah halaman yang didapatkan :<br>20 Halaman<br><br>Rekomendasi jumlah foto :<br>65 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 30.000 / lembar (2 halaman)',
            ], 
            [
                'name' => 'Photobook Premium 20x20cm',
                'category' => 'Premium',
                'price' => '500.000',
                'orientation' => '0',
                'description' => 'Premium Photobook memberi tampilan spread penuh tanpa terpotong halaman, sehingga foto indah Anda dapat tertampang luas dan jelas. Dengan ketebalan kertas 520gr, photobook jenis ini akan awet tidak bisa terlipat dan tahan air. Laminasi doff di tiap halaman membuat foto Anda semakin terlihat jernih dan tajam. Cocok digunakan untuk mengabadikan momen sekali seumur hidup seperti Prewedding, Wedding, Sweet17, Golden Anniversary, Wisuda, dan lain-lain.<br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi hot press<br><br>Ketebalan kertas yang digunakan :<br>520gr + laminasi doff<br><br>Jumlah halaman yang didapatkan :<br>35 Halaman<br><br>Rekomendasi jumlah foto :<br>65 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 25.000 / lembar (2 halaman)',
            ], 
            [
                'name' => 'Photobook Luxury 20x30cm',
                'category' => 'Luxury',
                'price' => '1.000.000',
                'orientation' => '3',
                'description' => 'Luxury Photobook biasa digunakan untuk mengabadikan moment-moment liburanmu setiap tahun, aktifivitas bersama teman-temanmu, atau bahkan dijadikan kado tak terlupakan untuk orang yang spesial dan masih banyak lagi momen-momen tak terlupakan yang bisa diabadikan di dalam sebuah photobook.<br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi doff<br><br>Ketebalan kertas yang digunakan :<br>712gr + laminasi UV Crystal<br><br>Jumlah halaman yang didapatkan :<br>20 Halaman<br><br>Rekomendasi jumlah foto :<br>65 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 50.000 / lembar (2 halaman)',
            ], 
            [
                'name' => 'Photobook Luxury 30x30cm',
                'category' => 'Luxury',
                'price' => '1.500.000',
                'orientation' => '0',
                'description' => 'Luxury Photobook biasa digunakan untuk mengabadikan moment-moment liburanmu setiap tahun, aktifivitas bersama teman-temanmu, atau bahkan dijadikan kado tak terlupakan untuk orang yang spesial dan masih banyak lagi momen-momen tak terlupakan yang bisa diabadikan di dalam sebuah photobook.<br><br>Jenis cover yang digunakan : <br>Hardcover dengan laminasi doff<br><br>Ketebalan kertas yang digunakan :<br>712gr + laminasi UV Crystal<br><br>Jumlah halaman yang didapatkan :<br>20 Halaman<br><br>Rekomendasi jumlah foto :<br>65 Foto<br><br>Mau menambah halaman? Bisa banget dong!<br>Untuk menambah halaman kalian hanya perlu menambah<br>Rp. 100.000 / lembar (2 halaman)',
            ], 
        ];
        DB::table('products')->insert($data);
    }
}
