<?php

/**
 * Mailer
 * 
 * Send messages
 */
class Mailer
{
    /**
     * Send a message
     * 
     * @param string $email The email address
     * @param string $message The message
     * @param bool $print If the 'echo' will be printed
     * 
     * @throws InvalidArgumentException If $email is empty
     * 
     * @return bool True if sent, false otherwise
     */
    public function sendMessage($email, $message, bool $print = false)
    {
        if (empty($email)) {
            throw new InvalidArgumentException;
        }

        // Use mail() or PHPMailer for example
        sleep(3);

        if ($print) {
            echo "send '$message' to '$email'";
        }

        return true;
    }

    /**
     * Send a message
     *
     * @param string $email  Recipient email address
     * @param string $message  Content of the message
     * @param bool $print If the 'echo' will be printed
     *
     * @throws InvalidArgumentException If $email is empty
     *
     * @return boolean
     */
    public static function send(string $email, string $message, bool $print = false)
    {
        if (empty($email)) {
            throw new InvalidArgumentException;
        }

        if ($print) {
            echo "Send '$message' to $email";
        }

        return true;
    }
}
