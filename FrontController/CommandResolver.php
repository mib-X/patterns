<?php


namespace FrontController;


use ReflectionClass;

class CommandResolver
{
    private static $reflectinCmd = null;
    private static $defaultCmd = DefaultCommand::class;

    public function __construct()
    {
        self::$reflectinCmd = new ReflectionClass(Command::class);
    }

    public function getCommand(Request $request)
    {
        $reg = Registry::instance();
        $path = $request->getPath();
        $commands = $reg->getCommands();

        $class = $commands->get($path);

        if (is_null($class)) {
            $request->addFeedback("Соответствие пути '$path' не обнаружено!");
            return new self::$defaultCmd();
        }
        if (! class_exists($class)) {
            $request->addFeedback("Класс '$class' не найден!");
            return new self::$defaultCmd();
        }
        $refclass = new ReflectionClass ($class);
        if (! $refclass->isSubClassOf(self::$reflectinCmd)) {
            $request->addFeedback(
                "Команда '$refclass' не относится к классу Command!");
            return new self::$defaultCmd();
        }
        return $refclass->newinstance();

    }
}