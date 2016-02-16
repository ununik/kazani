<?php
class HTML
{
    /**
     * @var string
     */
    private $title = '';
    /**
     * @var string
     */
    private $content = '';

//TITLE
    /**
     * @param $new
     */
    public function setTitle($new)
    {
        $this->title = $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

//CONTENT
    /**
     * @param $new
     */
    public function addToContent($new)
    {
        $this->content .= $new;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}