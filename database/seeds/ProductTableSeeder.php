<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'CÀ PHÊ PHIN GIẤY GU ĐẬM/ STRONG';
        $product->id_type = 2;
        $product->description = "Cà phê phin giấy Gu Đậm vị đậm đà gần giống với vị của cà phê phin bạn thường uống, đặc biệt vị cà phê hoàn toàn không chua. Phù hợp với những khách hàng thích hương vị mạnh mẽ.";
        $product->promotion_price=42000;
        $product->image = "abc";
        $product->unit ='hộp';
        $product->content='Cà phê phin giấy Gu Đậm

        Mỗi hộp cà phê phin giấy Gu Đậm gồm 5 gói chứa 5 phin giấy, mỗi phin giấy 16gr cà phê, mở phin chúng ta có thể pha đúng 1 ly cà phê đậm đắng nếu lượng nước vừa phải. Khách hàng có sở thích uống nhạt hãy pha nhiều nước hơn để được ly cà phê như ý muốn của mình.

        Cà phê phin giấy Gu Đậm được tạo nên từ hạt Robusta mang đến vị đậm đà cho tách cà phê của bạn. Nếu như chúng ta quen với vị cà phê đậm, đắng và không chua, cà phê phin giấy Gu Đậm Ngon là sự lựa chọn phù hợp với sở thích và thói quen về cà phê của chính bạn.

        Tách cà phê được pha từ 100% hạt Robusta không sử dụng hay pha trộn từ các hợp chất khác sẽ giúp bạn tập trung hơn cho lượng công việc cần giải quyết trong chuyến công tác hay tinh thần tỉnh táo để thưởng thức vẻ đẹp nơi bạn đặt chân đến.

        Greenfields Coffee đảm bảo cho chính khách hàng chúng tôi về chất lượng sản phẩm cũng như dịch vụ chúng tôi mang đến cho khách hàng. Sản phẩm lỗi do chính nhà sản xuất chúng tôi đổi trả dù bạn ở bất cứ đâu.

        Thành phần

        - Cà phê 100% nguyên chất không hương liệu, phụ gia.

        - Thành phần phin giấy Gu Đậm: Hạt Robusta và Arabica tiêu chuẩn xuất khẩu Châu Âu.

        Hạt Robusta tiêu chuẩn xuất khẩu S18 được chế biến khô nên vị cà phê chiết xuất từ loại hạt này sẽ đậm đà và xen lẫn nhiều hương khác nhau khi chúng ta cảm nhận.

        -  Có kèm sẵn một gói đường và một que khuấy tiện lợi khi sử dụng.

        Hướng dẫn sử dụng

        Bước 1. Cho từ từ 30ml nước sôi vào phin giấy chờ nước ngấm vào toàn bộ bột cà phê. Sau đó thêm tiếp 40ml vào phin.

        Bước 2. Đợi khoảng 5 phút thì lấy phin giấy ra khỏi ly và thưởng thức.

        Hạn sử dụng: 12 tháng kể từ ngày sản xuất

        Chân thành cám ơn quý khách đã đồng hành cùng sản phẩm Greenfields Coffee!

        ';
        $product->save();


        $product = new Product();
        $product->name = 'CÀ PHÊ PHIN GIẤY GU VỪA/ MEDIUM';
        $product->id_type = 2;
        $product->description = "Cà phê phin giấy Gu vừa vị cà phê đậm đà, hậu vị ngọt và vị chua rất nhẹ khi thưởng thức. Phù hợp với những khách hàng thích Gu cà phê nhẹ nhàng.";
        $product->promotion_price=53000;
        $product->image = "abc";
        $product->unit ='hộp';
        $product->content='Cà phê phin giấy Gu Vừa

        Tách cà phê được pha ra từ hạt Robusta với tỷ lệ cà phê hái chín cây gần như 100% sẽ đáp ứng được yêu cầu cả hương và vị của người sử dụng. Đậm, đắng nhẹ, lượng cafein vừa đủ làm cho tinh thần tỉnh táo và tăng khả năng tập trung cho người sử dụng. Nếu bạn không ngại về lượng cafein, Greenfields Coffee giới thiệu đến dòng sản phẩm cà phê phin giấy Gu Vừa

        Cà phê phin giấy Gu Vừa sẽ có độ chua nhẹ nơi đầu lưỡi vừa đủ trong sự chấp nhận của bạn nếu như bạn không thích vị chua ở cà phê, đặc biệt tách cà phê của bạn sẽ có vị đậm đà và hậu vị ngọt lưu hương khắp phòng khi sử dụng, Greenfields Coffee cam kết hương thơm bạn cảm nhận được hoàn toàn xuất phát từ bản thân của hạt cà phê, hoàn toàn không sử dụng hương thơm hóa học.

        Greenfields Coffee đảm bảo cho chính khách hàng chúng tôi về chất lượng sản phẩm cũng như dịch vụ chúng tôi mang đến cho khách hàng. Sản phẩm lỗi do chính nhà sản xuất chúng tôi đổi trả dù bạn ở bất cứ đâu.

        Thành phần cà phê

        - Cà phê 100% cà phê nguyên chất, không hương liệu, phụ gia.

        - Thành phần Cà phê phin giấy Gu Vừa hoàn toàn từ hạt Robusta Premium hái chín 100% và được chế biến ướt hoặc chế biến mật ong vì vậy vị cà phê sẽ thuần túy dễ cảm nhận. Vị cà phê đậm đà, hậu vị ngọt và vị chua rất nhẹ khi thưởng thức.

        - Có kèm sẵn một gói đường và một que khuấy tiện lợi khi sử dụng.

        Hướng dẫn sử dụng

        Bước 1. Cho từ từ 30ml nước sôi vào phin giấy chờ nước ngấm vào toàn bộ bột cà phê. Sau đó thêm tiếp 40ml vào phin.

        Bước 2. Đợi khoảng 5 phút thì lấy phin giấy ra khỏi ly và thưởng thức.

        Hạn sử dụng 12 tháng kể từ ngày sản xuất

        Chân thành cám ơn quý khách đã đồng hành cùng sản phẩm Greenfields Coffee!

        ';
        $product->save();

        $product = new Product();
        $product->name = 'CÀ PHÊ PHIN GIẤY GU THƠM / FLAVOUR';
        $product->id_type = 2;
        $product->description = "Cà phê phin giấy Gu Thơm vị cà phê có độ chua mạnh, thơm nhẹ nhàng, lượng cafein thấp nhất trong 3 dòng cà phê phin giấy. Phù hợp với khách hàng thích Arabica.";
        $product->promotion_price=65000;
        $product->image = "abc";
        $product->unit ='hộp';
        $product->content='Cà phê phin giấy Gu Thơm

        Cà phê phin giấy Gu Thơm rất phù hợp với những khách hàng chuộng cà phê có vị chua, ít cafein. Cà phê phin giấy Gu Thơm sẽ là sản phẩm cà phê đáp ứng tốt cho nhu cầu cà phê du lịch, công tác, cà phê ít cafein vẫn có thể giúp chúng ta tỉnh táo khi làm việc, đảm bảo năng lượng cho một ngày vi vu chiêm ngưỡng cảnh đẹp.



        Cà phê phin giấy Gu thơm 100% là hạt cà phê chín cây nên vị cà phê không gắt, không chát. Vị dịu nhẹ và hương thơm lâu, tạo cảm giác thích thú khi thưởng thức. Cà phê phin giấy Gu thơm Cao Cấp đặc biệt phù hợp với những khách hàng nữ không quen uống cà phê có lượng cafein cao.

        Greenfields Coffee đảm bảo cho chính khách hàng chúng tôi về chất lượng sản phẩm cũng như dịch vụ chúng tôi mang đến cho khách hàng. Sản phẩm lỗi do chính nhà sản xuất chúng tôi đổi trả dù bạn ở bất cứ đâu.

        Thành phần

        - Cà phê 100% nguyên chất không hương liệu, phụ gia.

        - Cà phê phin giấy Gu Thơm 100% hạt Arabica tiêu chuẩn xuất khẩu châu Âu có vị chua thanh, hậu vị ngọt và lượng cafein thấp.

        - Có kèm sẵn một gói đường và một que khuấy tiện lợi khi sử dụng.

        Hướng dẫn sử dụng

        Bước 1. Cho từ từ 30ml nước sôi vào phin giấy chờ nước ngấm vào toàn bộ bột cà phê. Sau đó thêm tiếp 40ml vào phin.

        Bước 2. Đợi khoảng 5 phút thì lấy phin giấy ra khỏi ly và thưởng thức.

        Hạn sử dụng: 12 tháng kể từ ngày sản xuất

        Chân thành cám ơn quý khách đã đồng hành cùng sản phẩm Greenfields Coffee!


        ';
        $product->save();

        $product = new Product();
        $product->name = 'PHIN TRUYỀN THỐNG/ CLASSIC 500G';
        $product->id_type = 1;
        $product->description = "Cà phê Truyền Thống được sản xuất từ hạt Robusta tiêu chuẩn, vị đậm, đắng, đúng Gu cà phê pha phin.";
        $product->promotion_price=65000;
        $product->image = "abc";
        $product->unit ='hộp';
        $product->content='Một gói cà phê pha phin nhỏ nhất dòng CLASSIC có khối lượng 500 g, pha được khoảng 25 ly cà phê, mỗi ly 25 g.

        Bạn đã quen với vị cà phê đậm, đắng khi uống có thể thêm 1 ít đường, 1 ít sữa tùy theo sở thích nhưng vị cà phê vẫn đậm đà và thoang thoảng hương cà phê khắp phòng thì CLASSIC sẽ là lựa chọn đúng đắn nhất.

        CLASSIC được sản xuất từ hạt Robusta, vị đắng đậm và không chua nên khi uống với đường hoặc sữa vào buổi sáng sẽ giúp tinh thần của bạn thật tỉnh táo cho một ngày dài sáng tạo và làm việc bận rộn. Đây là Gu cà phê truyền thống, các bác, các cô, chú đã quen uống cà phê phin sẽ hài lòng với sản phẩm CLASSIC – TRUYỀN THỐNG.

        Thành phần cà phê

        100% hạt cà phê Robusta, Robusta rang đậm, vị cà phê đắng, có vị chát nhẹ và hoàn toàn không chua.

        Hướng dẫn sử dụng

        Hạt cà phê pha phin được xay thô nên khi pha chúng ta cần nấu nước sôi ở nhiệt độ từ 97 đến 100 độ C để đảm bảo chiết xuất hết chất trong bột cà phê.

        B1. Tráng nhẹ phin và ly sứ bằng nước sôi

        B2. Lấy 25 g cà phê cho vào phin

        B3. Ủ cà phê với 50 g/ml nước sôi

        B4. Pha thêm 40 g/ml nước sôi vào phin



        ';
        $product->save();


        $product = new Product();
        $product->name = 'CÀ PHÊ PHIN GU ĐẬM/ STRONG 250G';
        $product->id_type = 1;
        $product->description = "Cà phê pha phin Gu Đậm được sản xuất 100% hạt Robusta 1, vị cà phê đậm đà, đắng và không chua.";
        $product->promotion_price=58000;
        $product->image = "abc";
        $product->unit ='hộp';
        $product->content='Cà phê phin truyền thống Gu Đậm được sản xuất từ hạt Robusta tiêuchuẩn có quá trình chế biến kỹ lưỡng và tỷ lệ cà phê chín cây khá cao nên tách cà phê bạn thưởng thức sẽ có vị ngọt từ đường tự nhiên của hạt cà phê mang lại đồng thời nó hạn chế tối đa vị chát từ trái cà phê thu hoạch xanh.
        Thành phần cà phê
        Cà phê phin truyền thống Gu Đậm được kết hợp bởi hai loại hạt cà phê: Robusta tiêu chuẩn xuất khẩu Châu Âu và Robusta Premium.
        Hạt Robusta tiêu chuẩn Châu Âu được chế biến khô nên vị cà phê rất đậm và đắng.
        Hạt Robusta Premium được chế biến ướt, quy trình chế biến kỹ vì vậy hương vị thuần cà phê không có mùi của gỗ cây. Vị cà phê từ hạt Robusta Premium đắng vừa phải, thơm nồng, ngọt tự nhiên.
        Cà phê phin truyền thống Gu Đậm được kết hợp của 2 loại hạt Robusta vì vậy hương vị sẽ đậm, thơm và không chua.
        Hạt cà phê pha phin được xay thô nên khi pha chúng ta cần nấu nước sôi ở nhiệt độ từ 97 đến 100 độ C để đảm bảo chiết xuất hết chất trong bột cà phê.
        Hướng dẫn sử dụng
        B1. Tráng nhẹ phin và ly sứ bằng nước sôi

        B2. Lấy 25 g cà phê cho vào phin

        B3. Ủ cà phê với 50 g/ml nước sôi

        B4. Pha thêm 40 g/ml nước sôi vào phin



        ';
        $product->save();


        $product = new Product();
        $product->name = 'CÀ PHÊ PHIN GU VỪA/ MEDIUM 250G';
        $product->id_type = 1;
        $product->description = "Cà phê Gu Vừa được sản xuất 100% hạt Robusta cao cấp và Arabica , vị cà phê đậm, đắng nhẹ và hơi chua.";
        $product->promotion_price=65000;
        $product->image = "abc";
        $product->unit ='hộp';
        $product->content='Cà phê pha phin Gu Vừa có vị chua nhẹ, hương thơm của cây cỏ, ít đắng và vị cà phê không quá đậm đặc biệt hàm lượng cafein thấp bởi thành phần của hai dòng cà phê này có sự góp mặt của cả Arabica và Robusta premium.

        Cà phê pha phin Gu Vừa là sự hòa quyện của hai loại hạt tạo nên một Gu cà phê đặc biệt cho người thưởng thức. Nếu bạn uống cà phê và thưởng thức quen những tách cà phê pha máy nơi công sở hoặc quán cà phê, Cà phê pha phin Gu Vừa sẽ đáp ứng rất tốt cho Gu cà phê của bạn khi pha tại nhà.

        Thành phần cà phê

        Cà phê pha phin Gu Vừa là sự kết hợp của 2 loại hạt: Robusta cao cấp, hạt Arabica cao cấp

        Bên cạnh đó hạt Robusta cao cấp được hái chín 100% và được chế biến ướt hoặc chế biến mật ong vì vậy vị cà phê sẽ thuầntúy dễ cảm nhận.

        Cùng với đó là hạt Arabica cao cấp vị của nó sẽ thanh dịu, hương thơm nhẹ nhàng tạo cảm giác khoang khoái khi sử dụng tách cà phê có sự kết hợp của 3 loại hạt cà phê này.

        Hướng dẫn sử dụng

        Hạt cà phê pha phin được xay thô nên khi pha chúng ta cần nấu nước sôi ở nhiệt độ từ 97 đến 100 độ C để đảm bảo chiết xuất hết chất trong bột cà phê.

        B1. Tráng nhẹ phin và ly sứ bằng nước sôi

        B2. Lấy 25 g cà phê cho vào phin

        B3. Ủ cà phê với 50 g/ml nước sôi

        B4. Pha thêm 40 g/ml nước sôi vào phin



        ';
        $product->save();


        $product = new Product();
        $product->name = 'CÀ PHÊ PHIN GU THƠM/ FLAVOUR 250G';
        $product->id_type = 1;
        $product->description = "Cà phê phin Gu Thơm được sản xuất từ hạt Arabica, rất phù hợp với khách hàng chuộng vị chua và ít cafein.";
        $product->promotion_price=90000;
        $product->image = "abc";
        $product->unit ='hộp';
        $product->content='Cà phê pha phin Gu Thơm có vị chua thanh, những ai muốn cà phê có độ chua mạnh sẽ rất yêu thích dòng cà phê này. Cà phê pha phin Gu Thơm thích hợp với những tách cà phê đường, bạn sẽ vô cùng hài lòng cho tách cà phê buổi sáng.
        Cà phê pha phin Gu Thơm đặc biệt phù hợp cho những ai có cơ địa không thể sử dụng những sản phẩm có độ cafein cao nhưng vẫn thích uống cà phê, để đảm bảo sức hãy thử sử dụng dòng cà phê pha phin Gu Thơm.
        Greenfields Coffee đảm bảo cho chính khách hàng chúng tôi về chất lượng sản phẩm cũng như dịch vụ chúng tôi mang đến cho khách hàng. Sản phẩm lỗi do chính nhà sản xuất chúng tôi đổi trả dù bạn ở bất cứ đâu.

        Thành phần cà phê

        Cà phê pha phin Gu Thơm được tạo ra từ hạt Arabica cao cấp.

        Hạt Arabica khiến cho cà phê có vị chua thanh, hương thơm dễ chịu và thơm lâu.

        Hướng dẫn sử dụng

        Hạt cà phê pha phin được xay thô nên khi pha chúng ta cần nấu nước sôi ở nhiệt độ từ 97 đến 100 độ C để đảm bảo chiết xuất hết chất trong bột cà phê.

        B1. Tráng nhẹ phin và ly sứ bằng nước sôi

        B2. Lấy 25 g cà phê cho vào phin

        B3. Ủ cà phê với 50 g/ml nước sôi

        B4. Pha thêm 40 g/ml nước sôi vào phin


        ';
        $product->save();
    }
}
