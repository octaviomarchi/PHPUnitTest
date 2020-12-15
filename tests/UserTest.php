<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        $user = new User;

        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test
     */
    public function user_has_first_name()
    {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals('Teresa', $user->first_name);
    }

    public function testNotificationIsSent()
    {
        $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer->method('sendMessage')->willReturn(true);
        
        $user = new User;
        $user->email = 'dave@example.com';
        $user->setMailer($mock_mailer);

        $this->assertTrue($user->notify('Hello'));
    }
}
