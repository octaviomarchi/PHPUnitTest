<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
    public function testSendMessageReturnsTrue()
    {
        $mailer = new Mailer;
        // $this->assertTrue(Mailer::send('dave@example.com', 'Hello!'));
        $this->assertTrue($mailer->send('dave@example.com', 'Hello!'));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $mailer = new Mailer;

        $this->expectException(InvalidArgumentException::class);

        // Mailer::send('', '');
        $mailer->send('', '');

    }
}
