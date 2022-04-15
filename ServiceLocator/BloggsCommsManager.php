<?php


namespace ServiceLocator;


class BloggsCommsManager extends CommsManager
{

    public function getHeaderText(): string
    {
        // TODO: Implement getHeaderText() method.
        return "Bloogs format header";
    }

    public function getApptEncoder(): ApptEncoder
    {
        // TODO: Implement getApptEncoder() method.
        return new BloggsApptencoder();
    }

    public function getFooterText(): string
    {
        // TODO: Implement getFooterText() method.
        return "Blogs format footer";
    }
}