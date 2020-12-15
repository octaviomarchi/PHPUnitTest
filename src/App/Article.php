<?php

namespace App;

class Article
{
    public $title;

    public function getSlug()
    {
        $slug = $this->title;

        $slug = trim($slug);
        
        $slug = preg_replace('/\s+/', '_', $slug);

        return $slug;
    }
}
