<?php


namespace FrontController;


use Exception;

class DefaultCommand extends Command
{
    function doExecute(Request $request)
    {
        $request->addFeedback("Welcome on default page");
        $view = __DIR__ . "/View/DefaultView.php";
        if(!file_exists($view)){
            throw new Exception("Не найден файл отображения");
        }
        include $view;
    }
}