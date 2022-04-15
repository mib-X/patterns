<?php


namespace ServiceLocator;


abstract class CommsManager
{
    abstract public function getHeaderText () : string;
    abstract public function getApptEncoder(): Apptencoder;
    abstract public function getFooterText(): string;
}