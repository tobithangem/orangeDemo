<?php

return [
    // Cấu hình cho các cổng thanh toán tại hệ thống của bạn, các cổng không xài có thể xóa cho gọn hoặc không điền.
    // Các thông số trên có được khi bạn đăng ký tích hợp.

    'gateways' => [
        'MoMoAIO' => [
            'driver' => 'MoMo_AllInOne',
            'options' => [
                'accessKey' => 'A1D62HoOetEKGCOz',
                'secretKey' => 'SXGSwf2xHI2BMe0nvqn4Bf6BbkPWIfE3',
                'partnerCode' => 'MOMONRCE20220103',
                'testMode' => true,
            ],
        ],
    ],
];
