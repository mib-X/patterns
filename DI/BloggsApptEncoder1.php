<?php
require_once "ServiceLocator/ApptEncoder.php";

class BloggsApptEncoder1 extends \ServiceLocator\ApptEncoder
{

    public function encode()
    {
        return "data encoded in Bloggs format";
    }
}