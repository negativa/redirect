<?php

namespace Adrenth\Redirect\Classes;

use Adrenth\Redirect\Models\Redirect;
use Cms\Classes\Page;

/**
 * Class PageHandler
 *
 * @package Adrenth\Redirect\Classes
 */
class PageHandler
{
    /** @type Page */
    private $page;

    /**
     * @param Page $page
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function onBeforeUpdate()
    {
        // Url hasn't change
        if (!$this->hasUrlChanged()) {
            return false;
        }

        // Parameters and regex are not supported
        if ($this->newUrlContainsParams()) {
            return false;
        }

        // Don't create a redirect loop; that would be silly ;-)
        if ($this->getNewUrl() === $this->getOriginalUrl()) {
            return false;
        }

        $this->createRedirect();
    }

    public function onAfterDelete()
    {
        Redirect::where('cms_page', '=', $this->page->getBaseFileName())
            ->where('system', '=', 1)
            ->delete();

        Redirect::where('cms_page', '=', $this->page->getBaseFileName())
            ->where('system', '=', 0)
            ->update([
                'cms_page' => null,
                'is_enabled' => false,
            ]);
    }

    /**
     * @return bool
     */
    private function hasUrlChanged()
    {
        return array_key_exists('url', $this->page->getDirty());
    }

    /**
     * @return bool
     */
    private function newUrlContainsParams()
    {
        return strpos($this->getNewUrl(), ':') !== false;
    }

    /**
     * @return array
     */
    private function getOriginalUrl()
    {
        return $this->page->getOriginal('url');
    }

    /**
     * @return array
     */
    private function getNewUrl()
    {
        $dirty = $this->page->getDirty();

        if (array_key_exists('url', $dirty)) {
            return $dirty['url'];
        }

        return $this->page->getOriginal('url');
    }

    /**
     * Create CMS page type
     *
     * @return void
     */
    private function createRedirect()
    {
        Redirect::create([
            'match_type' => Redirect::TYPE_EXACT,
            'target_type' => Redirect::TARGET_TYPE_CMS_PAGE,
            'from_url' => $this->getOriginalUrl(),
            'to_url' => null,
            'cms_page' => $this->page->getBaseFileName(),
            'status_code' => 301,
            'is_enabled' => true,
            'system' => true,
        ]);
    }
}