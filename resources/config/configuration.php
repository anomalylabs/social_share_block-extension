<?php

return [
    'networks' => [
        'type'   => 'anomaly.field_type.checkboxes',
        'config' => [
            'options' => [
                'twitter'    => 'anomaly.extension.social_share_block::configuration.networks.option.twitter',
                'facebook'   => 'anomaly.extension.social_share_block::configuration.networks.option.facebook',
                'googleplus' => 'anomaly.extension.social_share_block::configuration.networks.option.googleplus',
                'linkedin'   => 'anomaly.extension.social_share_block::configuration.networks.option.linkedin',
                'pinterest'  => 'anomaly.extension.social_share_block::configuration.networks.option.pinterest',
                'reddit'     => 'anomaly.extension.social_share_block::configuration.networks.option.reddit',
                'mail'       => 'anomaly.extension.social_share_block::configuration.networks.option.mail',
                'print'      => 'anomaly.extension.social_share_block::configuration.networks.option.print',
            ],
        ],
    ],
];
