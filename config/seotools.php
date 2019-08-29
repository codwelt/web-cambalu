<?php
/**
 * @see https://github.com/artesaos/seotools
 */
$descripcion = "Anuncia tus trabajos universitarios y gana con ellos (dinero, otro trabajo, una jartera, etc).";

$keywords = ["trabajos","universidad","cambalache","trueque","universitarios","gratis","comprar","vender"];

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => config('app.name'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => $descripcion, // set false to total remove
            'separator'    => ' - ',
            'keywords'     => $keywords,
            'canonical'    => config('app.url'), // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow,
            'article:publisher' => 'https://www.facebook.com/ccambaluuu/',
            'article:author' => 'Cambalu'
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => $descripcion, // set false to total remove
            'url'         => config('app.url'), // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => config('app.url'),
            'images'      => [
                config('app.url') . '/img/logo2.png'

            ],
            'locale' => app()->getLocale()
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => $descripcion, // set false to total remove
            'url'         => config('app.url'), // Set null for using Url::current(), set false to total remove
            'site'        => false,
            'images'      => [
                config('app.url') . '/img/logo2.png'

            ],
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => $descripcion, // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [
                config('app.url') . '/img/logo2.png'

            ],
        ],
    ],
];
