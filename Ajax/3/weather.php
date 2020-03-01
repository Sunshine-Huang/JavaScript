<?php


header('Access-Control-Allow-Origin: *'); 
 header('Access-Control-Allow-Credentials: true'); 
 header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); 
 header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$city = $_GET['city'];

if($city=='南宁'){
    $data = [
        'today'=>[
            'wea'=>'晴',
            'tem'=>'17℃',
            'win'=>'东北风3级'
        ],
        'c7d'=>[
            ['day'=>'4日今天','wea'=>'晴', 'temMax'=>'17℃','temMin'=>'17℃','win'=>'东北风3级'],
            ['day'=>'5日明天','wea'=>'晴', 'temMax'=>'29℃','temMin'=>'17℃','win'=>'东北风3级'],
            ['day'=>'6日后天','wea'=>'晴', 'temMax'=>'30℃','temMin'=>'18℃','win'=>'东北风6级'],
            ['day'=>'7日（周四）','wea'=>'多云转晴', 'temMax'=>'29℃','temMin'=>'17℃','win'=>'东北风3级'],
            ['day'=>'8日（周五）','wea'=>'晴', 'temMax'=>'27℃','temMin'=>'17℃','win'=>'东北风2级'],
            ['day'=>'9日（周六）','wea'=>'晴', 'temMax'=>'28℃','temMin'=>'17℃','win'=>'东北风3级'],
            ['day'=>'10日（周日）','wea'=>'晴转多云', 'temMax'=>'28℃','temMin'=>'19℃','win'=>'东北风2级']
        ]
    ];
    echo json_encode($data);
}else if($city=='柳州'){
    $data = [
        'today'=>[
            'wea'=>'小雨',
            'temMax'=>'19℃','temMin'=>'15℃',
            'win'=>'东北风2级'
        ],
        'c7d'=>[
            ['day'=>'4日今天','wea'=>'小雨', 'temMax'=>'19℃','temMin'=>'15℃','win'=>'东北风3级'],
            ['day'=>'5日明天','wea'=>'晴', 'temMax'=>'29℃','temMin'=>'17℃','win'=>'东北风3级'],
            ['day'=>'6日后天','wea'=>'多云', 'temMax'=>'33℃','temMin'=>'28℃','win'=>'东北风4级'],
            ['day'=>'7日（周四）','wea'=>'多云转晴', 'temMax'=>'29℃','temMin'=>'20℃','win'=>'东北风3级'],
            ['day'=>'8日（周五）','wea'=>'晴', 'temMax'=>'25℃','temMin'=>'22℃','win'=>'东北风43级'],
            ['day'=>'9日（周六）','wea'=>'晴', 'temMax'=>'25℃','temMin'=>'23℃','win'=>'东北风3级'],
            ['day'=>'10日（周日）','wea'=>'晴转多云', 'temMax'=>'28℃','temMin'=>'20℃','win'=>'东北风3级']
        ]
    ];
    echo json_encode($data);
}


?>