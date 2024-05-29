<?php

namespace widgetEngine;

class Text extends Widgets
{
    private $content;
    private $style;
    private $align;
    private $class;
    private $dir;
    private $id;
    private $lang;
    private $title;

    public function __construct($content,$style ='', $class = '', $id = '', $align = '',  $dir = '', $lang = '')
    {
        $this->content = $content;
        $this->style = $style;
        $this->align = $align;
        $this->class = $class;
        $this->dir = $dir;
        $this->id = $id;
        $this->lang = $lang;
    }
    public  function get()
    {
        $html = "<p";

        if (!empty($this->style)) {
            $html .= " style=\"{$this->style}\"";
        }
        if (!empty($this->align)) {
            $html .= " align=\"{$this->align}\"";
        }
        if (!empty($this->class)) {
            $html .= " class=\"{$this->class}\"";
        }
        if (!empty($this->dir)) {
            $html .= " dir=\"{$this->dir}\"";
        }
        if (!empty($this->id)) {
            $html .= " id=\"{$this->id}\"";
        }
        if (!empty($this->lang)) {
            $html .= " lang=\"{$this->lang}\"";
        }
        if (!empty($this->title)) {
            $html .= " title=\"{$this->title}\"";
        }

        $html .= ">{$this->content}</p>";

        echo $html;
    }
}
