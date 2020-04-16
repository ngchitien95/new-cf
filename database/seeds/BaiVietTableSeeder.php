<?php

use App\BaiViet;
use Illuminate\Database\Seeder;

class BaiVietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baiviet = new BaiViet();
        $baiviet->title='GREENFIELDS COFFEE HƯỚNG DẪN PHA CÀ PHÊ PHIN TẠI NHÀ';
        $baiviet->content='CORONA - DÙ Ở NHÀ VẪN PHA CÀ PHÊ NGON

        Bạn không biết cách pha cà phê
        Bạn thường pha cà phê không ngon
        Bạn muốn mua cà phê chất lượng để uống ở nhà
        Bạn đừng lo lắng, Greenfields Coffee hướng dẫn pha cà phê ngon tại nhà – bạn chỉ cần Alo đặt hàng, Greenfields Coffee giao hàng tận nơi

        Rất đơn giản để có ly cà phê ngon tại nhà vừa tiện lợi, sạch sẽ và tránh nguy cơ lây nhiễm bệnh

        Những lợi ích khi uống cà phê tại nhà mùa dịch bệnh Corona

        Tăng cường hệ miễn dịch: trong cà phê có rất nhiều chất chống oxy hóa giúp bạn giảm các bệnh như ung thư, hệ miễn dịch khỏe hơn,…
        Giảm nguy cơ lây nhiễm bệnh: trong tình hình bệnh Corona đang phát triển mạnh mẽ, bạn nên uống và pha cà phê tại nhà là biên pháp tốt nhất hiện nay.
        Giúp cơ thể tỉnh táo, bớt lo lắng, trầm cảm: ít nhất là giúp cơ thể khỏe mạnh hơn để chống chọi với đợt dịch này

         Uống cà phê tại nhà vào mùa dịch Corona không thể giúp bạn chữa được bệnh nhưng giúp bạn phòng tránh tốt nhất những nguy cơ có thể lây nhiễm



        Công ty Cà phê Đồng Xanh (Greenfields Coffee)
        ☎️ Điện thoại: 0931 931 144
        🏠 Địa chỉ: 118 Lý Nam Đế, Thành phố Huế
        🌐 www.greenfieldscoffee.com
        ';
        $baiviet->image='123';
        $baiviet->describe='Greenfields Coffee hướng dẫn pha cà phê phin tại nhà. Rất đơn giản để có ly cà phê ngon tại nhà vừa tiện lợi, sạch sẽ và tránh nguy cơ lây nhiễm bệnh';
        $baiviet->save();

        $baiviet = new BaiViet();
        $baiviet->title='MỪNG XUÂN CANH TÝ - NHẬN QUÀ NHƯ Ý';
        $baiviet->content='MỪNG XUÂN CANH TÝ - NHẬN QUÀ NHƯ Ý

        Greenfields Coffee gửi lời cám ơn chân thành nhất đến tất cả khách hàng đã, đang và sẽ sử dụng dịch vụ của Greenfields Coffee trong những năm qua

        Mùa ưu đãi lớn nhất chào đón năm mới 2020, mua cà phê là có quà!

        Greenfields Coffee áp dụng cho 20 khách hàng đầu tiên mở hàng chào năm mới

        ▪️ Mua 1kg cà phê đặc sản Huế tặng phin nhôm cao cấp có in logo Cà phê đặc sản trị giá 100.000



        Mua 2 chai cà phê bất kỳ tặng hộp phin giấy Gu vừa giá 53.000



        Mua 2 hộp cà phê phin giấy bất kỳ tặng ly sứ cao cấp in logo Greenfields Coffee chuyên dùng cho cà phê phin giấy



        Mua máy pha cà phê Lamaca giá chỉ còn 2.020.000 tặng 500g Cà phê đặc sản Huế trị giá 200.000



        Ngoài ra, TẶNG VOUCHER GIẢM GIÁ 20% khi mua bất kì sản phẩm cà phê của Greenfields Coffee
        (Thời gian bắt đầu từ ngày 1/1/2020 – 20/01/2020)



        Công ty Cà phê Đồng Xanh (Greenfields Coffee)
        Điện thoại: 0931 931 144
        Địa chỉ: 118 Lý Nam Đế, Thành phố Huế

         www.greenfieldscoffee.com

        ';
        $baiviet->image='123';
        $baiviet->describe='Greenfields Coffee gửi lời cám ơn chân thành nhất đến tất cả khách hàng đã, đang và sẽ sử dụng dịch vụ của Greenfields Coffee trong những năm qua';
        $baiviet->save();

    }
}
