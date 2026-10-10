<?php
// UEFA Women's Europa Cup 2026/27 - round of 16, status 1 Oct 2026
// 'league-position': latest standings found, provisional early in many seasons
// 'logo': club-site crest where found, otherwise the UEFA badge. 'logo_uefa': uniform 240x240 PNG fallback.
$teams = [
    'Ajax' => [
        'league' => 'Vrouwen Eredivisie (Netherlands)',
        'uefa-coefficient-ranking' => 21,
        'league-position' => 2,
        'city' => 'Amsterdam',
        'url' => 'https://www.ajax.nl/',
        'logo' => 'https://www.ajax.nl/media/vimnukaa/ajax-klassiek-logo-pms200.svg',
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2604835.png'
    ],
    'Brann' => [
        'league' => 'Toppserien (Norway)',
        'uefa-coefficient-ranking' => 18,
        'league-position' => 1,
        'city' => 'Bergen',
        'url' => 'https://www.brann.no/',
        'logo' => 'https://www.brann.no/resultater/_/image/405ca125-7c3e-4052-88c0-ef89865ed4b1:410b729c5e9affefa4f2386528ae9bb502db9861/wide-72-72/Brann_logo_141616.svg', // fragile hashed URL
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2612267.png'
    ],
    'Brøndby' => [
        'league' => 'A-Liga (Denmark)',
        'uefa-coefficient-ranking' => 85,
        'league-position' => 3,
        'city' => 'Brøndby',
        'url' => 'https://brondby.com/',
        'logo' => 'https://brondby.com/_nuxt/img/logo.a691999.svg', // build-hashed, may break
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/83727.png'
    ],
    'Czarni Sosnowiec' => [
        'league' => 'Ekstraliga (Poland)',
        'uefa-coefficient-ranking' => 115,
        'league-position' => null,
        'city' => 'Sosnowiec',
        'url' => 'http://www.czarnisosnowiec.eu/',
        'logo' => 'http://www.czarnisosnowiec.eu/images/logo.png', // HTTP only: blocked on HTTPS pages, use logo_uefa
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2603340.png'
    ],
    'Fenerbahçe' => [
        'league' => 'Süper Lig (Turkey)',
        'uefa-coefficient-ranking' => 104,
        'league-position' => null,
        'city' => 'Istanbul',
        'url' => 'https://www.fenerbahce.org/',
        'logo' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2612244.png', // UEFA pattern, not individually verified
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2612244.png'
    ],
    'Feyenoord' => [
        'league' => 'Vrouwen Eredivisie (Netherlands)',
        'uefa-coefficient-ranking' => 73,
        'league-position' => 9,
        'city' => 'Rotterdam',
        'url' => 'https://www.feyenoord.nl/',
        'logo' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611785.png', // UEFA pattern, not individually verified
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611785.png'
    ],
    'Eintracht Frankfurt' => [
        'league' => 'Frauen-Bundesliga (Germany)',
        'uefa-coefficient-ranking' => 14,
        'league-position' => 2,
        'city' => 'Frankfurt am Main',
        'url' => 'https://www.eintracht.de/',
        'logo' => 'https://media.eintracht.de/image/upload/ar_3:2,c_fill,dpr_1.0,f_auto,g_xy_center,q_40,w_1100/sge_standard_logo_rgb-f66c.png', // CDN transform, padded 3:2 crop, may break
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611099.png'
    ],
    'Hammarby' => [
        'league' => 'Damallsvenskan (Sweden)',
        'uefa-coefficient-ranking' => 17,
        'league-position' => 2,
        'city' => 'Stockholm',
        'url' => 'https://www.hammarbyfotboll.se/',
        'logo' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2600837.png', // UEFA pattern, not individually verified
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2600837.png'
    ],
    'Malmö FF' => [
        'league' => 'Damallsvenskan (Sweden)',
        'uefa-coefficient-ranking' => 65,
        'league-position' => 3,
        'city' => 'Malmö',
        'url' => 'https://www.mff.se/',
        'logo' => 'https://www.mff.se/app/themes/mesta-maestarna/resources/images/mff-logo.svg',
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2613920.png'
    ],
    'PSV' => [
        'league' => 'Vrouwen Eredivisie (Netherlands)',
        'uefa-coefficient-ranking' => 68,
        'league-position' => 4,
        'city' => 'Eindhoven',
        'url' => 'https://www.psv.nl/',
        'logo' => 'https://www.psv.nl/upload_mm/f/2/e/108043_fullimage_logo-psv2020-240x240.png',
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611131.png'
    ],
    'Real Sociedad' => [
        'league' => 'Liga F (Spain)',
        'uefa-coefficient-ranking' => 29,
        'league-position' => 14,
        'city' => 'San Sebastián',
        'url' => 'https://www.realsociedad.eus/',
        'logo' => 'https://www.realsociedad.eus/Content/img/Escudo-head.png',
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2601940.png'
    ],
    'Rosenborg' => [
        'league' => 'Toppserien (Norway)',
        'uefa-coefficient-ranking' => 61,
        'league-position' => 3,
        'city' => 'Trondheim',
        'url' => 'https://www.rbk.no/',
        'logo' => 'https://www.rbk.no/_/asset/no.seeds.app.football:0000019ff16ca8d0/img/logo/rbk/logo.png', // version ID in path, may break
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/78160.png'
    ],
    'Sparta Praha' => [
        'league' => '1. liga žen (Czech Republic)',
        'uefa-coefficient-ranking' => 24,
        'league-position' => 2,
        'city' => 'Prague',
        'url' => 'https://sparta.cz/',
        'logo' => 'https://sparta.cz/_next/static/media/sparta-logo.9d66bdc8.svg', // build-hashed, may break
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/81198.png'
    ],
    'Spartak Myjava' => [
        'league' => '1. liga žien (Slovakia)',
        'uefa-coefficient-ranking' => 54,
        'league-position' => 1,
        'city' => 'Myjava',
        'url' => 'https://www.spartakmyjava.sk/',
        'logo' => 'https://e091236de1.clvaw-cdnwnd.com/a374fbdd1de580ca87a69f9715a08851/200000249-c380ec3811/SPARTAK_MYJAVA.png?ph=e091236de1', // Webnode CDN, may block hotlinking
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2607644.png'
    ],
    'Torreense' => [
        'league' => 'Liga BPI (Portugal)',
        'uefa-coefficient-ranking' => 59,
        'league-position' => 2,
        'city' => 'Torres Vedras',
        'url' => 'https://www.torreense.com/',
        'logo' => 'https://www.torreense.com/images/logo.png',
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611345.png'
    ],
    'Wolfsburg' => [
        'league' => 'Frauen-Bundesliga (Germany)',
        'uefa-coefficient-ranking' => 6,
        'league-position' => 3,
        'city' => 'Wolfsburg',
        'url' => 'https://www.vfl-wolfsburg.de/',
        'logo' => 'https://www.vfl-wolfsburg.de/_assets/c6bb6cd0ef4342a474168f76207f5023/assets/logo.svg?c=1778353188', // hash + cache-buster, may break
        'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2600828.png'
    ],
];
