<?php

namespace App\Core;

use Exception;

abstract class Controller
{
    /**
     * Returning html code of $template
     *
     * @param string $template
     * @param array $parameters
     *
     * @return array
     */
    protected function render(
        string $template = "error/404.html.php",
        array $parameters = []
    ) : array
    {
        try {
            /** @var string $html */
            $html = file_get_contents('../templates/' . $template);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return ['html' => $html, 'p' => $parameters];
    }
}