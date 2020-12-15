<?php

namespace App;

class Article
{
    public $title;

    public function getSlug()
    {
        return str_replace(' ', '_', $this->title);
    }
}
