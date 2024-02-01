<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id'     => '1088160321267-ma35c4g7t81d12mupo719nrir8ff24s2.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/auth/google/callback',

    ],

    'facebook' => [
        'client_id'     => '1090011038475721',
        'client_secret' => '02e9ef6a8ad9d32189bbc5eaec4db2ff',
        'redirect'      => '/auth/facebook/callback',
    ],

];


//        'redirect'      => '/dashboard',
