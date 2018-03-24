<?php

return [
    'networks'  => [
        'type'   => 'anomaly.field_type.checkboxes',
        'config' => [
            'options' => [
                'twitter'    => 'anomaly.extension.social_share_block::configuration.networks.option.twitter',
                'facebook'   => 'anomaly.extension.social_share_block::configuration.networks.option.facebook',
                'googleplus' => 'anomaly.extension.social_share_block::configuration.networks.option.googleplus',
                'linkedin'   => 'anomaly.extension.social_share_block::configuration.networks.option.linkedin',
                'pinterest'  => 'anomaly.extension.social_share_block::configuration.networks.option.pinterest',
                'reddit'     => 'anomaly.extension.social_share_block::configuration.networks.option.reddit',
                'tumblr'     => 'anomaly.extension.social_share_block::configuration.networks.option.tumblr',
                'buffer'     => 'anomaly.extension.social_share_block::configuration.networks.option.buffer',
                'mail'       => 'anomaly.extension.social_share_block::configuration.networks.option.mail',
                'print'      => 'anomaly.extension.social_share_block::configuration.networks.option.print',
            ],
        ],
    ],
    'placement' => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'options' => [
                'default'       => 'anomaly.extension.social_share_block::configuration.placement.option.default',
                'sticky-left'   => 'anomaly.extension.social_share_block::configuration.placement.option.left',
                'sticky-right'  => 'anomaly.extension.social_share_block::configuration.placement.option.right',
                'sticky-bottom' => 'anomaly.extension.social_share_block::configuration.placement.option.bottom',
            ],
        ],
    ],
];
