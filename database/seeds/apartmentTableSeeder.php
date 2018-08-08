<?php

use Illuminate\Database\Seeder;

class apartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://media.vinhomes.vn/storage/4.jpg'
            ],
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://media.vinhomes.vn/storage/5_1.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://chungcuflc.com/wp-content/uploads/2017/03/vinhomes-lo-duc-1.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://chungcuflc.com/wp-content/uploads/2017/03/phoi-canh-novaland-da-phuoc-da-nang.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://lh4.googleusercontent.com/-sBiCPhB7aH4/VpJgmlFnWnI/AAAAAAAACXE/KMEHBydNqm8/s1600/3.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://chungcuhanoidep.vn/uploads/shops/2015_05/chung-cu-flc-twin-towers.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://royalcityhoanggia.com/wp-content/uploads/2016/11/thue-can-ho-Royal-City.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://chungcuvincom.com/images/product/goc/1406174028-ban-chung-cu-royal-city.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://images.ndh.vn/Images/Uploaded/Share/2013/10/07/673Royal-City.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://www.jll.com/GSP/Documents/gsp-sp2013/images/eco-city-img1.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://file.talaweb.com/u1067864/home/K%2B/chung-cu-eco-green-city-nguyen-xien.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://kenh14cdn.com/2017/photo6199477635134892029-1514185418971.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://www.vinaconex.com.vn/upload/vinatatower.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://image.vtc.vn/files/thy.hue/2018/03/26/img_7999-3-1418377.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://vtv1.mediacdn.vn/zoom/700_438/2017/chay-chung-cu-anh-1497618712096.png'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://media.vinhomes.vn/storage/4.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://nguyenmanhninh.com/wp-content/uploads/2015/07/chung-cu-vov-complex1.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://media.vinhomes.vn/storage/4.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'http://nguyenmanhninh.com/wp-content/uploads/2015/07/chung-cu-vov-complex1.jpg'
            ]
            ,
            [
                'name' => 'VinHome',
                'address' => 'Long Biên',
                'price' => '500.000.000',
                'general_information' => 'Thiết kế sang trọng, tinh tế và hài hòa với kiến trúc xung quanh, mang đến sự tiện nghi tối ưu, hiện đại và các điều kiện sống tốt nhất cho mỗi gia đình.',
                'detail_information' => 'Thiết kế sang trọng',
                'thumbnail' => 'https://media.vinhomes.vn/storage/4.jpg'
            ]]);
    }
}
