<?php namespace Anomaly\SocialShareBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;

/**
 * Class SocialShareBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SocialShareBlockExtension extends BlockExtension
{

    /**
     * The extension category.
     *
     * @var string
     */
    protected $category = 'social';

    /**
     * This extension provides a social
     * sharing block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.social_share';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.social_share_block::content';

}
