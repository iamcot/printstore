<?php

return array(
    'title' => 'Phongee.vn',
    'pretitle' => '',
    'suftitle' => '- Phongee.vn',
    'description' => 'Phongee Color - Phongee.vn ',
    'keywords'  => 'iphone, ipad, mac book',
    'treecatdeep' => 1,
    'tablepp'    =>  18,
    'theme' => 'default',
    'orderstatus' => array(
        '0' => array('value'=>'Mới đặt','color'=>'danger'),
        '1' => array('value'=>'Xác nhận','color'=>'warning'),
        '2' => array('value'=>'Đã gửi','color'=>'info'),
        '3' => array('value'=>'Hoàn thành','color'=>'success'),
        '9' => array('value'=>'Đã hủy','color'=>'default'),
    ),
    'topnav' => array(
        'home' => array(
            'id' => 'home',
            'url' => '/',
            'title' => 'Trang chủ',
            'icon' => 'glyphicon glyphicon-home',
        ),
        'moi-ve' => array(
            'id' => 'moi-ve',
            'url' => '/fav/moi-ve',
            'title' => 'Hàng mới về',
            'icon' => 'glyphicon glyphicon-star',
        ),
        'dang-hot' => array(
            'id' => 'dang-hot',
            'url' => '/fav/dang-hot',
            'title' => 'Hàng đang hot',
            'icon' => 'glyphicon glyphicon-thumbs-up',
        ),
        'dang-sale' => array(
            'id' => 'dang-sale',
            'url' => '/fav/dang-sale',
            'title' => 'Hàng khuyến mãi',
            'icon' => 'glyphicon glyphicon-gift',
        ),
    ),
    'shipping' => array(
        'ship_shop' => array(
            'id' => 'ship_shop',
            'value' => 'Nhận  tại cửa hàng',
            'time' => '1',
            'pay_allow' => array('pay_tienmat'),
            'province_allow' => array('hcm'),
        ),
        'ship_hcm' => array(
            'id' => 'ship_hcm',
            'value' => 'Ship Nội thành Sài Gòn',
            'time' => '1~2',
            'pay_allow' => array('pay_tienmat'),
            'province_allow' => array('hcm'),
        ),
        'ship_xe' => array(
            'id' => 'ship_xe',
            'value' => 'Gửi nhà xe',
            'time' => '1~2',
            'pay_allow' => array('pay_chuyenkhoan'),
            'province_allow' => array('daklak','daknong','khanhhoa','danang','longan','kiengiang','tayninh','cantho','camau','dongthap','vungtau'),
        ),
        'ship_ems' => array(
            'id' => 'ship_ems',
            'value' => 'Gửi Chuyển phát NHANH',
            'time' => '2~4',
            'pay_allow' => array('pay_chuyenkhoan','pay_cod'),
            'province_allow' => null,
        ),
        'ship_post' => array(
            'id' => 'ship_post',
            'value' => 'Gửi chuyển phát CHẬM',
            'time' => '7~10',
            'pay_allow' => array('pay_chuyenkhoan','pay_cod'),
            'province_allow' => null,
        ),
    ),
    'payment' => array(
        'pay_tienmat' => array(
            'id' => 'pay_tienmat',
            'value' => 'Tiền mặt',
        ),
        'pay_chuyenkhoan' => array(
            'id' => 'pay_chuyenkhoan',
            'value' => 'Chuyển khoản ngân hàng',
        ),
        'pay_cod' => array(
            'id' => 'pay_cod',
            'value' => 'COD (thanh toán khi nhận bưu phẩm)',
        ),
    ),
    'province' => array(
        'hcm' => array( 'id' => 'hcm','title' =>'TP Hồ Chí Minh' ,'group' => 0,'guixe'=>'0','code'=>'70,76'),
        'hanoi' => array( 'id' => 'hanoi','title' =>'Hà Nội' ,'group' => 1,'guixe'=>'0','code'=>'10,15'),
        'danang' => array( 'id' => 'danang','title' =>'Đà Nẵng' ,'group' => 2,'guixe'=>50000,'code'=>'55'),
        'angiang' => array( 'id' => 'angiang','title' =>'An Giang' ,'group' => 3,'guixe'=>'0','code'=>'88'),
        'binhduong' => array( 'id' => 'binhduong','title' =>'Bình Dương ' ,'group' => 3,'guixe'=>'0','code'=>'82'),
        'binhphuoc' => array( 'id' => 'binhphuoc','title' =>'Bình Phước ' ,'group' => 3,'guixe'=>'0','code'=>'83'),
        'vungtau' => array( 'id' => 'vungtau','title' =>'Bà Rịa - Vũng Tàu' ,'group' => 3,'guixe'=>'0','code'=>'79'),
        'baclieu' => array( 'id' => 'baclieu','title' =>'Bạc Liêu' ,'group' => 3,'guixe'=>'0','code'=>'96'),
        'bentre' => array( 'id' => 'bentre','title' =>'Bến Tre' ,'group' => 3,'guixe'=>'0','code'=>'93'),
        'binhthuan' => array( 'id' => 'binhthuan','title' =>'Bình Thuận ' ,'group' => 3,'guixe'=>'0','code'=>'80'),
        'camau' => array( 'id' => 'camau','title' =>'Cà Mau' ,'group' => 3,'guixe'=>'0','code'=>'97'),
        'cantho' => array( 'id' => 'cantho','title' =>'Cần Thơ' ,'group' => 3,'guixe'=>'0','code'=>'92'),
        'dongnai' => array( 'id' => 'dongnai','title' =>'Đồng Nai' ,'group' => 3,'guixe'=>'0','code'=>'71'),
        'dongthap' => array( 'id' => 'dongthap','title' =>'Đồng Tháp' ,'group' => 3,'guixe'=>'0','code'=>'87'),
        'haugiang' => array( 'id' => 'haugiang','title' =>'Hậu Giang' ,'group' => 3,'guixe'=>'0','code'=>'91'),
        'kiengiang' => array( 'id' => 'kiengiang','title' =>'Kiên Giang' ,'group' => 3,'guixe'=>'0','code'=>'92'),
        'longan' => array( 'id' => 'longan','title' =>'Long An' ,'group' => 3,'guixe'=>'0','code'=>'85'),
        'lamdong' => array( 'id' => 'lamdong','title' =>'Lâm Đồng' ,'group' => 3,'guixe'=>'0','code'=>'67'),
        'ninhthuan' => array( 'id' => 'ninhthuan','title' =>'Ninh Thuận' ,'group' => 3,'guixe'=>'0','code'=>'66'),
        'soctrang' => array( 'id' => 'soctrang','title' =>'Sóc Trăng' ,'group' => 3,'guixe'=>'0','code'=>'95'),
        'tayninh' => array( 'id' => 'tayninh','title' =>'Tây Ninh ' ,'group' => 3,'guixe'=>'0','code'=>'84'),
        'tiengiang' => array( 'id' => 'tiengiang','title' =>'Tiền Giang ' ,'group' => 3,'guixe'=>'0','code'=>'86'),
        'travinh' => array( 'id' => 'travinh','title' =>'Trà Vinh' ,'group' => 3,'guixe'=>'0','code'=>'94'),
        'vinhlong' => array( 'id' => 'vinhlong','title' =>'Vĩnh Long' ,'group' => 3,'guixe'=>'0','code'=>'89'),
        'daklak' => array( 'id' => 'daklak','title' =>'DakLak' ,'group' => 3,'guixe'=>55000,'code'=>'63'),
        'daknong' => array( 'id' => 'daknong','title' =>'DakNong' ,'group' => 3,'guixe'=>55000,'code'=>'64'),
        'binhdinh' => array( 'id' => 'binhdinh','title' =>'Bình Định' ,'group' => 4,'guixe'=>'0','code'=>'59'),
        'gialai' => array( 'id' => 'gialai','title' =>'Gia Lai' ,'group' => 4,'guixe'=>'0','code'=>'60'),
        'hue' => array( 'id' => 'hue','title' =>'Thừa Thiên Huế' ,'group' => 4,'guixe'=>'0','code'=>'53'),
        'komtum' => array( 'id' => 'komtum','title' =>'Kom Tum' ,'group' => 4,'guixe'=>'0','code'=>'58'),
        'khanhhoa' => array( 'id' => 'khanhhoa','title' =>'Khánh Hòa' ,'group' => 4,'guixe'=>'0','code'=>'65'),
        'phuyen' => array( 'id' => 'phuyen','title' =>'Phú Yên' ,'group' => 4,'guixe'=>'0','code'=>'62'),
        'quangbinh' => array( 'id' => 'quangbinh','title' =>'Quảng Bình' ,'group' => 4,'guixe'=>'0','code'=>'51'),
        'quangtri' => array( 'id' => 'quangtri','title' =>'Quảng Trị' ,'group' => 4,'guixe'=>'0','code'=>'52'),
        'quangnam' => array( 'id' => 'quangnam','title' =>'Quảng Nam' ,'group' => 4,'guixe'=>'0','code'=>'56'),
        'quangngai' => array( 'id' => 'quangngai','title' =>'Quảng Ngãi' ,'group' => 4,'guixe'=>'0','code'=>'57'),
        'baccan' => array( 'id' => 'baccan','title' =>'Bắc Cạn' ,'group' => 4,'guixe'=>'0','code'=>'26'),
        'bacgiang' => array( 'id' => 'bacgiang','title' =>'Bắc Giang' ,'group' => 4,'guixe'=>'0','code'=>'23'),
        'bacninh' => array( 'id' => 'bacninh','title' =>'Bắc Ninh' ,'group' => 4,'guixe'=>'0','code'=>'22'),
        'caobang' => array( 'id' => 'caobang','title' =>'Cao Bằng' ,'group' => 4,'guixe'=>'0','code'=>'27'),
        'dienbien' => array( 'id' => 'dienbien','title' =>'Điện Biên' ,'group' => 4,'guixe'=>'0','code'=>'38'),
        'hagiang' => array( 'id' => 'hagiang','title' =>'Hà Giang' ,'group' => 4,'guixe'=>'0','code'=>'31'),
        'hanam' => array( 'id' => 'hanam','title' =>'Hà Nam' ,'group' => 4,'guixe'=>'0','code'=>'40'),
        'hatinh' => array( 'id' => 'hatinh','title' =>'Hà Tĩnh' ,'group' => 4,'guixe'=>'0','code'=>'48'),
        'hungyen' => array( 'id' => 'hungyen','title' =>'Hưng Yên' ,'group' => 4,'guixe'=>'0','code'=>'16'),
        'hoabinh' => array( 'id' => 'hoabinh','title' =>'Hòa Bình' ,'group' => 4,'guixe'=>'0','code'=>'35'),
        'laocai' => array( 'id' => 'laocai','title' =>'Lào Cai' ,'group' => 4,'guixe'=>'0','code'=>'33'),
        'laichau' => array( 'id' => 'laichau','title' =>'Lai Châu' ,'group' => 4,'guixe'=>'0','code'=>'39'),
        'langson' => array( 'id' => 'langson','title' =>'Lạng Sơn' ,'group' => 4,'guixe'=>'0','code'=>'24'),
        'namdinh' => array( 'id' => 'namdinh','title' =>'Nam Định' ,'group' => 4,'guixe'=>'0','code'=>'42'),
        'nghean' => array( 'id' => 'nghean','title' =>'Nghệ An' ,'group' => 4,'guixe'=>'0','code'=>'46,47'),
        'ninhbinh' => array( 'id' => 'ninhbinh','title' =>'Ninh Bình' ,'group' => 4,'guixe'=>'0','code'=>'66'),
        'phutho' => array( 'id' => 'phutho','title' =>'Phú Thọ' ,'group' => 4,'guixe'=>'0','code'=>'29'),
        'sonla' => array( 'id' => 'sonla','title' =>'Sơn La' ,'group' => 4,'guixe'=>'0','code'=>'36'),
        'thaibinh' => array( 'id' => 'thaibinh','title' =>'Thái Bình' ,'group' => 4,'guixe'=>'0','code'=>'41'),
        'thainguyen' => array( 'id' => 'thainguyen','title' =>'Thái Nguyên' ,'group' => 4,'guixe'=>'0','code'=>'25'),
        'thanhhoa' => array( 'id' => 'thanhhoa','title' =>'Thanh Hóa' ,'group' => 4,'guixe'=>'0','code'=>'44,45'),
        'tuyenquang' => array( 'id' => 'tuyenquang','title' =>'Tuyên Quang' ,'group' => 4,'guixe'=>'0','code'=>'30'),
        'yenbai' => array( 'id' => 'yenbai','title' =>'Yên Bái' ,'group' => 4,'guixe'=>'0','code'=>'32'),
        'haiduong' => array( 'id' => 'haiduong','title' =>'Hải Dương' ,'group' => 4,'guixe'=>'0','code'=>'17'),
        'haiphong' => array( 'id' => 'haiphong','title' =>'Hải Phòng' ,'group' => 4,'guixe'=>'0','code'=>'18'),
        'quangninh' => array( 'id' => 'quangninh','title' =>'Quảng Ninh' ,'group' => 4,'guixe'=>'0','code'=>'20'),
        'vinhphuc' => array( 'id' => 'vinhphuc','title' =>'Vĩnh Phúc' ,'group' => 4,'guixe'=>'0','code'=>'28'),

    ),
//    'emsprice' => array(
////        '50' => array('klg'=>50,'g1a'=>12540,'g1b'=>14630,'g2a'=>12540,'g2b'=>14630,'g3a'=> 11220,'g3b'=> 13090,'g4a'=> 13200,'g4b'=> 15400),
//        '100' => array('klg'=>50,'g1a'=>17820,'g1b'=>20790,'g2a'=>17820,'g2b'=>20790,'g3a'=> 16500,'g3b'=> 19250,'g4a'=> 18480,'g4b'=> 21560),
//        '250' => array('klg'=>100,'g1a'=>28380,'g1b'=>33110,'g2a'=>26400,'g2b'=>30800,'g3a'=> 21780,'g3b'=> 25410,'g4a'=> 29700,'g4b'=> 34650),
//        '500' => array('klg'=>250,'g1a'=>36960,'g1b'=>43120,'g2a'=>34980,'g2b'=>40810,'g3a'=> 31020,'g3b'=> 36190,'g4a'=> 38940,'g4b'=> 45430),
//        '1000' => array('klg'=>500,'g1a'=>53460,'g1b'=>62370,'g2a'=>50820,'g2b'=>59290,'g3a'=> 43560,'g3b'=> 50820,'g4a'=> 57420,'g4b'=> 66990),
//        '1500' => array('klg'=>1000,'g1a'=>69300,'g1b'=>80850,'g2a'=>65340,'g2b'=>76230,'g3a'=> 52800,'g3b'=> 61600,'g4a'=> 73260,'g4b'=> 85470),
//        '2000' => array('klg'=>1500,'g1a'=>83820,'g1b'=>97790,'g2a'=>78540,'g2b'=>91630,'g3a'=> 64020,'g3b'=> 74690,'g4a'=> 89100,'g4b'=> 103950),
//        '2500' => array('klg'=>2000,'g1a'=>95040,'g1b'=>110880,'g2a'=>89760,'g2b'=>104720,'g3a'=> 69036,'g3b'=> 80542,'g4a'=> 101640,'g4b'=> 118580),
//        '3000' => array('klg'=>2500,'g1a'=>106260,'g1b'=>123970,'g2a'=>100980,'g2b'=>117810,'g3a'=> 74052,'g3b'=> 86394,'g4a'=> 114180,'g4b'=> 133210),
//        '3500' => array('klg'=>3000,'g1a'=>117480,'g1b'=>137060,'g2a'=>112200,'g2b'=>130900,'g3a'=> 79068,'g3b'=> 92246,'g4a'=> 126720,'g4b'=> 147840),
//        '4000' => array('klg'=>3500,'g1a'=>128700,'g1b'=>150150,'g2a'=>123420,'g2b'=>143990,'g3a'=> 84084,'g3b'=> 98098,'g4a'=> 139260,'g4b'=> 162470),
//        '4500' => array('klg'=>4000,'g1a'=>139920,'g1b'=>163240,'g2a'=>134640,'g2b'=>157080,'g3a'=> 89100,'g3b'=> 103950,'g4a'=> 151800,'g4b'=> 177100),
//        '5000' => array('klg'=>4500,'g1a'=>151140,'g1b'=>176330,'g2a'=>145860,'g2b'=>170170,'g3a'=> 94116,'g3b'=> 109802,'g4a'=> 164340,'g4b'=> 191730),
//        'more' => array('klg'=>500,'g1a'=>11220,'g1b'=>13090,'g2a'=>11220,'g2b'=>13090,'g3a'=> 5016,'g3b'=> 5852,'g4a'=> 12540,'g4b'=> 14630),
//    ),
    'emsprice' => array(
        '50' => array('klg'=>50,'g1a'=>12540,'g1b'=>14630,'g2a'=>12540,'g2b'=>14630,'g3a'=> 11220,'g3b'=> 13090,'g4a'=> 13200,'g4b'=> 15400),
        '100' => array('klg'=>100,'g1a'=>17820,'g1b'=>20790,'g2a'=>17820,'g2b'=>20790,'g3a'=> 16500,'g3b'=> 19250,'g4a'=> 18480,'g4b'=> 21560),
        '250' => array('klg'=>250,'g1a'=>28380,'g1b'=>33110,'g2a'=>26400,'g2b'=>30800,'g3a'=> 21780,'g3b'=> 25410,'g4a'=> 29700,'g4b'=> 34650),
        '500' => array('klg'=>500,'g1a'=>36960,'g1b'=>43120,'g2a'=>34980,'g2b'=>40810,'g3a'=> 31020,'g3b'=> 36190,'g4a'=> 38940,'g4b'=> 45430),
        '1000' => array('klg'=>1000,'g1a'=>53460,'g1b'=>62370,'g2a'=>50820,'g2b'=>59290,'g3a'=> 43560,'g3b'=> 50820,'g4a'=> 57420,'g4b'=> 66990),
        '1500' => array('klg'=>1500,'g1a'=>69300,'g1b'=>80850,'g2a'=>65340,'g2b'=>76230,'g3a'=> 52800,'g3b'=> 61600,'g4a'=> 73260,'g4b'=> 85470),
        '2000' => array('klg'=>2000,'g1a'=>83820,'g1b'=>97790,'g2a'=>78540,'g2b'=>91630,'g3a'=> 64020,'g3b'=> 74690,'g4a'=> 89100,'g4b'=> 103950),
        '2500' => array('klg'=>2500,'g1a'=>95040,'g1b'=>110880,'g2a'=>89760,'g2b'=>104720,'g3a'=> 69036,'g3b'=> 80542,'g4a'=> 101640,'g4b'=> 118580),
        '3000' => array('klg'=>3000,'g1a'=>106260,'g1b'=>123970,'g2a'=>100980,'g2b'=>117810,'g3a'=> 74052,'g3b'=> 86394,'g4a'=> 114180,'g4b'=> 133210),
        '3500' => array('klg'=>3500,'g1a'=>117480,'g1b'=>137060,'g2a'=>112200,'g2b'=>130900,'g3a'=> 79068,'g3b'=> 92246,'g4a'=> 126720,'g4b'=> 147840),
        '4000' => array('klg'=>4000,'g1a'=>128700,'g1b'=>150150,'g2a'=>123420,'g2b'=>143990,'g3a'=> 84084,'g3b'=> 98098,'g4a'=> 139260,'g4b'=> 162470),
        '4500' => array('klg'=>4500,'g1a'=>139920,'g1b'=>163240,'g2a'=>134640,'g2b'=>157080,'g3a'=> 89100,'g3b'=> 103950,'g4a'=> 151800,'g4b'=> 177100),
        '5000' => array('klg'=>5000,'g1a'=>151140,'g1b'=>176330,'g2a'=>145860,'g2b'=>170170,'g3a'=> 94116,'g3b'=> 109802,'g4a'=> 164340,'g4b'=> 191730),
        'more' => array('klg'=>500,'g1a'=>11220,'g1b'=>13090,'g2a'=>11220,'g2b'=>13090,'g3a'=> 5016,'g3b'=> 5852,'g4a'=> 12540,'g4b'=> 14630),
    ),
    'hcm_district' => array(
        'q1' => array('id'=>'q1','title'=>'Quận 1','fee'=>25000),
        'q2' => array('id'=>'q2','title'=>'Quận 2','fee'=>40000),
        'q3' => array('id'=>'q3','title'=>'Quận 3','fee'=>25000),
        'q4' => array('id'=>'q4','title'=>'Quận 4','fee'=>40000),
        'q5' => array('id'=>'q5','title'=>'Quận 5','fee'=>25000),
        'q6' => array('id'=>'q6','title'=>'Quận 6','fee'=>25000),
        'q7' => array('id'=>'q7','title'=>'Quận 7','fee'=>40000),
        'q8' => array('id'=>'q8','title'=>'Quận 8','fee'=>40000),
        'q9' => array('id'=>'q9','title'=>'Quận 9','fee'=>40000),
        'q10' => array('id'=>'q10','title'=>'Quận 10','fee'=>25000),
        'q11' => array('id'=>'q11','title'=>'Quận 11','fee'=>25000),
        'q12' => array('id'=>'q12','title'=>'Quận 12','fee'=>40000),
        'td' => array('id'=>'td','title'=>'Quận Thủ Đức','fee'=>40000),
        'gv' => array('id'=>'gv','title'=>'Quận Gò Vấp','fee'=>25000),
        'bth' => array('id'=>'bth','title'=>'Quận Bình Thạnh','fee'=>25000),
        'tb' => array('id'=>'tb','title'=>'Quận Tân Bình','fee'=>25000),
        'tp' => array('id'=>'tp','title'=>'Quận Tân Phú','fee'=>25000),
        'pn' => array('id'=>'pn','title'=>'Quận Phú Nhuận','fee'=>25000),
        'bt' => array('id'=>'bt','title'=>'Quận Bình Tân','fee'=>40000),
        'cc' => array('id'=>'cc','title'=>'Củ Chi','fee'=>40000),
        'hm' => array('id'=>'hm','title'=>'Hóc Môn','fee'=>40000),
        'bc' => array('id'=>'bc','title'=>'Bình Chánh','fee'=>40000),
        'nb' => array('id'=>'nb','title'=>'Nhà Bè','fee'=>40000),
        'cg' => array('id'=>'cg','title'=>'Cần Giờ','fee'=>40000),
    ),
    'postprice' =>array(
        '100' => array('klg'=>20,'price'=>7590),
        '250' => array('klg'=>100,'price'=>8855),
        '500' => array('klg'=>250,'price'=>12018),
        '1000' => array('klg'=>500,'price'=>18343),
        '1500' => array('klg'=>1000,'price'=>23404),
        '2000' => array('klg'=>2000,'price'=>29728),
    ),
);