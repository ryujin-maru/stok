<?php
/**
 * @see https://github.com/artesaos/seotools
 */

 namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => '', // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => '株式会社Stokは通信事業やイベント事業などを展開するスタートアップ企業です。', // set false to total remove
            'separator'    => '|',
            'keywords'     => ['株式会社Stok','株式会社stok','Stok','stok','ストック','株式会社ストック','下川巧記','通信事業','イベント事業'],
            'canonical'    => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
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
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => null, // set false to total remove
            'description' => '株式会社Stokは通信事業やイベント事業などを展開するスタートアップ企業です。', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => "website",
            'site_name'   => "株式会社Stok",
            'images'      => ['https://stok.email/images/logo_img.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => '株式会社stok(ストック)', // set false to total remove
            "alternateName" => ["株式会社stok","(株)Stok","(株)stok",'株式会社ストック',"人材派遣会社Stok"],
            'description' => '株式会社Stokは通信事業やイベント事業などを展開するスタートアップ企業です。', // set false to total remove
            'url'         => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'name'        => '株式会社Stok',
            'type'        => 'WebSite',
            'images'      => [],
        ],
    ],
];
