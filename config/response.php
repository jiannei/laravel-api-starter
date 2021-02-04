<?php

/*
 * This file is part of the Jiannei/laravel-response.
 *
 * (c) Jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use App\Repositories\Enums\ResponseCodeEnum;

return [
    'enum' => ResponseCodeEnum::class,

    'validation_error_code' => ResponseCodeEnum::HTTP_UNPROCESSABLE_ENTITY,

    'format' => [
        'paginated_resource' => [
            'data_field' => 'list',
        ],
    ],
];
