<?php


namespace DI;


use ServiceLocator\ApptEncoder;

class AppointmentMaker2
{
    private $encoder;

    public function __construct(ApptEncoder $encoder)
    {
        $this->encoder = $encoder;
    }
    public function makeAppointment(){
        return $this->encoder->encode();
    }
}