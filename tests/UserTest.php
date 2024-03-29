<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function tearDown(): void
    {
        Mockery::close();
    }

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

        $this->assertTrue($user->notifyNonStatic('Hello'));
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

        unset($mock_mailer);
    }

    public function testNotifyReturnsTrueOption1()
    {
        $user = new User('dave@example.com');

        $mailer = $this->createMock(Mailer::class);

        $mailer->method('sendMessage')
            ->willReturn(true);

        $user->setMailer($mailer);

        $this->assertTrue($user->notifyNonStatic('Hello!'));

        unset($mailer);
    }

    public function testNotifyReturnsTrueOption2()
    {
        $user = new User('dave@example.com');

        $user->setMailerCallable(function () {

            // echo "mocked";

            return true;
        });

        $this->assertTrue($user->notifyCallable('Hello!'));
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testNotifyReturnsTrueOption3()
    {
        $user = new User('dave@example.com');

        $mock = Mockery::mock('alias:Mailer');

        $mock->shouldReceive('send')
            ->once()
            ->with($user->email, 'Hello!')
            ->andReturn(true);

        $this->assertTrue($user->notifyStaticMailer('Hello!'));
    }   
}
