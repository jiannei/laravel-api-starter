<?php

use App\Enums\ResponseEnum;
use Jiannei\Enum\Laravel\Support\Enums\HttpStatusCode;

return [
    // 响应状态码
    ResponseEnum::class => [
        // 成功
        HttpStatusCode::HTTP_OK->value => '操作成功', // 自定义 HTTP 状态码返回消息
        HttpStatusCode::HTTP_INTERNAL_SERVER_ERROR->value => '操作失败',
        HttpStatusCode::HTTP_UNPROCESSABLE_ENTITY->value => '验证失败',
        HttpStatusCode::HTTP_UNAUTHORIZED->value => '授权失败',

        // 业务操作成功
        ResponseEnum::SERVICE_REGISTER_SUCCESS->value => '注册成功',
        ResponseEnum::SERVICE_LOGIN_SUCCESS->value => '登录成功',

        // 业务操作失败：授权业务
        ResponseEnum::SERVICE_REGISTER_ERROR->value => '注册失败',
        ResponseEnum::SERVICE_LOGIN_ERROR->value => '登录失败',

        // 客户端错误
        ResponseEnum::CLIENT_PARAMETER_ERROR->value => '参数错误',
        ResponseEnum::CLIENT_CREATED_ERROR->value => '数据已存在',
        ResponseEnum::CLIENT_DELETED_ERROR->value => '数据不存在',

        // 服务端错误
        ResponseEnum::SYSTEM_ERROR->value => '服务器错误',
        ResponseEnum::SYSTEM_UNAVAILABLE->value => '服务器正在维护，暂不可用',
        ResponseEnum::SYSTEM_CACHE_CONFIG_ERROR->value => '缓存配置错误',
        ResponseEnum::SYSTEM_CACHE_MISSED_ERROR->value => '缓存未命中',
        ResponseEnum::SYSTEM_CONFIG_ERROR->value => '系统配置错误',
    ],
];
