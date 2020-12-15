<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    public function setUp(): void
    {
        $this->article = new Article;
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame('', $this->article->getSlug());
    }

    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "An example article";

        $this->assertEquals('An_example_article', $this->article->getSlug());
    }

    public function testSlugHasWhitespaceReplacedBySingleUnderscore()
    {
        $this->article->title = "An   example   \n  article";

        $this->assertEquals('An_example_article', $this->article->getSlug());
    }

    public function testSlugDoesNotStartOrEndWithUnderscore()
    {
        $this->article->title = " An example article ";

        $this->assertEquals('An_example_article', $this->article->getSlug());
    }

    public function testSlugDoesNotHaveAnyNonWordCharacters()
    {
        $this->article->title = 'Read! This! Now!';

        $this->assertEquals('Read_This_Now', $this->article->getSlug());
    }
}
