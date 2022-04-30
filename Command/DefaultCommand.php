<?php


namespace Command;


class DefaultCommand extends Command
{

    public function execute(CommandContext $context): bool
    {

        return true;
    }
}