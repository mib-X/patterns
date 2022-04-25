<?php


namespace Strategy2;


class RegexMarker extends Marker
{

    public function mark(string $response): bool
    {
        return (preg_match($this->test, $response) === 1);
    }
}