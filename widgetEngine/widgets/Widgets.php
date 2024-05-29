<?php
namespace widgetEngine;
 class Widgets extends CssHelper
{
    public function getStyleCss(array $style): string
    {
        $css = '';
        foreach ($style as $property => $value) {
            $css .= "$property: $value; ";
        }
        return rtrim($css, '; ');
    }
}
