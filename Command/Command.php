<?php

namespace Command;

abstract class Command
{
    abstract public function execute(CommandContext $context) : bool;
}
