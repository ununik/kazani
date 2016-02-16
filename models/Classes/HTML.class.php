<?php
class HTML
{
    private $title = '';
    private $content = '';

    public function setTitle($new)
    {
        $this->title = $new;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function addToContent($new)
    {
        $this->content .= $new;
    }
    public function getContent()
    {
        return $this->content;
    }
}