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
        'client_id' => '64449137425-ppikbd0fnrv81ju9c7f31qbq6u6smou5.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/auth/google/callback',
        'analytics_id' => config('templatecookie.google_analytics'),
        'active' => true,
    ],

    'facebook' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/facebook/callback',
        'active' => false,
    ],

    'twitter' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/twitter/callback',
        'active' => false,
    ],

    'linkedin-openid' => [
        'client_id' => '7773shzc9k6x3v',
        'client_secret' => 'WPL_AP1.0tgEU03u1G4dHPGD.Phxfkg==',
        'redirect' => '/auth/linkedin-openid/callback',
        'active' => true,
    ],

    'github' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/github/callback',
        'active' => false,
    ],
];
