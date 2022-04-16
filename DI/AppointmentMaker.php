<?php


namespace DI;


use ServiceLocator\BloggsApptEncoder;

class AppointmentMaker
{
    public function makeAppointment() : string
    {
        $encoder = new BloggsApptEncoder();
        return $encoder->encode();
    }
}