<?php

namespace Stati\Plugin\Avatar;

use Stati\Event\SiteEvent;
use Stati\Event\SettingTemplateVarsEvent;
use Stati\Event\WillParseTemplateEvent;
use Stati\Plugin\Plugin;
use Stati\Site\Site;
use Stati\Site\SiteEvents;
use Stati\Liquid\TemplateEvents;
use Stati\Plugin\Avatar\Liquid\Tag\Avatar as AvatarTag;

class Avatar extends Plugin
{
    protected $name = 'avatar';

    public static function getSubscribedEvents()
    {
        return array(
            TemplateEvents::WILL_PARSE_TEMPLATE => 'onWillParseTemplate',
        );
    }

    public function onWillParseTemplate(WillParseTemplateEvent $event)
    {
        $template = $event->getTemplate();
        $template->registerTag('avatar', AvatarTag::class);
    }



    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
