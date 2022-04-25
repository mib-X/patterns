<?php


namespace Strategy2;


class MatchMarker extends Marker
{

    public function mark(string $response): bool
    {
        return $this->test == $response;
    }
}