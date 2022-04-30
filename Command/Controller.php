<?php


namespace Command;


class Controller
{
    private CommandContext $context;
    function __construct()
    {
        $this->context = new CommandContext();
    }
    function getContext() : CommandContext
    {
        return $this->context;
    }
    function process()
    {
        $action = $this->context->get('action');
        $action = ( is_null( $action ) ) ? "default" : $action;
        $cmd = CommandFactory::getCommand( $action );
        if ( ! $cmd->execute( $this->context ) ) {
            // handle failure
            echo $this->getContext()->getError();
            echo "handle failure";
        } else {
            // success
            // dispatch view now..
            echo "dispatch view now";
        }
    }
}