<?php


namespace Strategy2;


abstract class Question
{
    private $marker;
    private $question;
    public function __construct(string $question, Marker $marker)
    {
        $this->marker = $marker;
        $this->question = $question;
    }

    public function mark(string $response) : bool
    {
        return $this->marker->mark($response);
    }
}
