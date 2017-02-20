<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


    'botman' => [
        'hipchat_urls' => [
            env('HIPCHAT_URL')
        ],
        'microsoft_bot_handle' => env('MICROSOFT_BOT_HANDLE'),
        'microsoft_app_id' => env('MICROSOFT_APP_ID'),
        'microsoft_app_key' => env('MICROSOFT_APP_KEY'),
        'nexmo_key' => env('NEXMO_KEY'),
        'nexmo_secret' => env('NEXMO_SECRET'),
        'slack_token' => env('SLACK_TOKEN'),
        'telegram_token' => env('TELEGRAM_TOKEN'),
        'facebook_token' => 'facebookMartisorToken',
        'facebook_app_secret' => 'EAASDZAXZCTSZCoBABu94tbCTYHu8Jh9pUwQ8m8oKeJdKmchWsFM7NA0JAFVPAnI82J0aUO2hN8hypfzm15XCw5CYRQ1ZAHZBxMNZBfftwNDGd9JjWQGEI5BwtwyocQUZB2SLHv0eolaCYrZBoS9EcQZB1HeyTmZB5C3ZA2vg6CyKU0XzgZDZD'
    ],
];
