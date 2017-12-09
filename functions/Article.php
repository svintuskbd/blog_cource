<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 06.12.17
 * Time: 19:46
 */

class Article
{
    const TEST = 'qwerty';
    public $title = null;
    public $content = null;
    public $test = null;
    public $arr = [];

    /**
     * @return null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null $title
     */
    public function setTitle($title)
    {
        $this->title = $title.self::TEST;
    }

    /**
     * @return null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param null $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

}