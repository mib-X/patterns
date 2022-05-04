<?php


namespace FrontController;


use Exception;

class StuffCommand extends Command
{

    function doExecute(Request $request)
    {
        $request->addFeedback("Welcome on Stuff page");
        $view = __DIR__ . "/View/Stuff.php";
        if(!file_exists($view)){
            throw new Exception("Не найден файл отображения");
        }
        include $view;
    }
}