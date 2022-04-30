<?php


namespace Command;


class MessageSystem
{
    private string $error = '';

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    public function send($email, $message, $topic)
    {
        $send = mail($email, $topic, $message);
        if($send === false)
        {
            $this->error = "email not send";
        }
        return true;
    }

}