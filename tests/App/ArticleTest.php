<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public function testTitleIsEmptyByDefault()
    {
        $article = new Article;

        $this->assertEmpty($article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $article = new Article;

        $this->assertSame('', $article->getSlug());
    }
}
