<?php

return [
    'twitter'   => [
        'url' => 'https://twitter.com/intent/tweet?text={{ template.meta_title }} - {{ url_full() }}',
    ],
    'facebook'  => [
        'url' => 'https://www.facebook.com/sharer/sharer.php?u={{ url_full() }}',
    ],
    'googleplus'  => [
        'url' => 'https://plus.google.com/share?url={{ url_full() }}',
    ],
    'linkedin'  => [
        'url' => 'https://www.linkedin.com/cws/share?url={{ url_full() }}',
    ],
    'pinterest' => [
        'url' => 'http://pinterest.com/pin/create/button/?url={{ url_full() }}&description={{ template.meta_title }}',
    ],
    'reddit'    => [
        'url' => 'http://www.reddit.com/submit?url={{ url_full() }}&amp;title={{ template.meta_title }}',
    ],
    'tumblr'    => [
        'url' => 'https://www.tumblr.com/widgets/share/tool/preview?shareSource=legacy&canonicalUrl=&url={{ url_full() }}&posttype=link&title={{ template.meta_title }}&caption={{ template.meta_title }}&content={{ url_full() }}',
    ],
    'buffer'    => [
        'url' => 'https://buffer.com/add?source=button&url={{ url_full() }}&text={{ template.meta_title }}&posttype=link',
    ],
    'mail'      => [
        'icon' => 'ion-paper-airplane',
        'url' => 'mailto:?subject={{ template.meta_title }}&amp;amp;body={{ url_full() }}',
    ],
    'print'      => [
        'icon' => 'ion-printer',
        'url' => 'javascript:window.print();',
    ],
];
