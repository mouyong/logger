<?php

return [
    /*
     * Enable sending log of batch
     */
    'batch' => false,

    /*
     * Enable queue sending log
     */
    'queue' => false,

    /*
     * Log level
     */
    'level' => 200,

    /*
     * bubble
     */
    'bubble' => false,

    /*
     * Elasticsearch DB
     */
    'elasticsearch' => [
        'hosts' => [
            [
                /*
                 * host is required
                 */
                'host' => env('ELASTICSEARCH_HOST', 'localhost'),
                'port' => env('ELASTICSEARCH_PORT', 9200),
                'scheme' => env('ELASTICSEARCH_SCHEME', 'http'),
                'user' => env('ELASTICSEARCH_USER', null),
                'pass' => env('ELASTICSEARCH_PASS', null)
            ],
        ],
        'retries' => 2,
        /*
         * Cart path
         */
        'cert' => ''
    ],

    /*
     * Handler options
     */
    'options' => [
        'index' => 'monolog', // Elastic index name
        'type' => '_doc',    // Elastic document type
        'ignore_error' => false,     // Suppress Elasticsearch exceptions
    ],

    /*
     * Enable trace of exception log
     */
    'exception' => [
        'trace' => false,
    ],

    /*
     * Log extra filed
     */
    'extra' => [
        'host' => 'example.com',
        'php' => '7.3.5',
        'laravel' => '6.5.2'
    ]
];
