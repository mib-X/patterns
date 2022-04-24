<?php


namespace ServiceLocator;


class BloggsCommsManager extends CommsManager
{

    public function getHeaderText(): string
    {
        return "Bloggs format header";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptencoder();
    }

    public function getFooterText(): string
    {
        return "Blogs format footer";
    }
}