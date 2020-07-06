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
        string $template = "errors/404.html.php",
        array $parameters = []
    ) : string
    {
        try {
            /** @var string $html */
            $html = file_get_contents('../templates/' . $template);

            foreach ($parameters as $key => $parameter){

                if (is_object($parameter)) {
                    preg_match_all('/{{\s{0,}'.$key.'\.[a-zA-Z0-9]{1,}\s{0,}}}/', $html, $matches);

                    foreach ($matches[0] as $property) {
                        $propertExplode = explode('.', $property);
                        $propertExplode = explode(' ', $propertExplode[1]);
                        $propertyName = $propertExplode[0];
                        $propertGetterName = str_replace([' ', '}'], '', 'get'.ucfirst($propertyName));

                        $propertyValue = $parameter->$propertGetterName();

                        $html = str_replace('{{ '.$key.'.'.$propertyName.' }}', $propertyValue, $html);
                    }

                } else {
                    $html = str_replace('{{ ' . $key . ' }}', $parameters[$key], $html);
                }
            }


        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $html;
    }
}