<?php


namespace ServiceLocator;


class MegaCommsManager extends CommsManager
{

    public function getHeaderText(): string
    {
        // TODO: Implement getHeaderText() method.
        return "Mega header";
    }

    public function getApptEncoder(): Apptencoder
    {
        // TODO: Implement getApptEncoder() method.
        return new MegaApptencoder();

    }

    public function getFooterText(): string
    {
        // TODO: Implement getFooterText() method.
        return  "Mega Footer";
    }
}