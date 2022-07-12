<?php

namespace App;

class Article
{
    public string $title;

    public function getSlug(): string
    {
        if(empty($this->title)) {
            return '';
        }

        $slug = $this->title;

        $slug = trim($slug);

        $slug = preg_replace('/\s+/', '_', $slug);

        return preg_replace('/\W+/', '', $slug);
    }
}
