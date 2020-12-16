<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        $user = new User('');

        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User('');

        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test
     */
    public function user_has_first_name()
    {
        $user = new User('');

        $user->first_name = "Teresa";

        $this->assertEquals('Teresa', $user->first_name);
    }

    public function testNotificationIsSent()
    {
        $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer->expects($this->once())
                    ->method('sendMessage')
                    ->with($this->equalTo('dave@example.com'), $this->equalTo('Hello'))
                    ->willReturn(true);
        
        $user = new User('dave@example.com');
        $user->setMailer($mock_mailer);

        $this->assertTrue($user->notify('Hello'));
    }

    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User('');

        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->setMethods(null)
                            ->getMock();

        $user->setMailer($mock_mailer);
        
        $this->expectException(Exception::class);

        $user->notify('Hello');

    }

    public function testNotifyReturnsTrue()
    {
        $user = new User('dave@example.com');

        $mailer = $this->createMock(Mailer::class);

        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Hello!'));
    }    
}
