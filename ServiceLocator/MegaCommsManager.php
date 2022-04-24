<?php


namespace ServiceLocator;


class MegaCommsManager extends CommsManager
{

    public function getHeaderText(): string
    {
        return "Mega header";
    }

    public function getApptEncoder(): Apptencoder
    {
        return new MegaApptencoder();

    }

    public function getFooterText(): string
    {
        return  "Mega Footer";
    }
}
