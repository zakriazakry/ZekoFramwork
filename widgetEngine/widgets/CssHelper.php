<?php
namespace widgetEngine;

class CssHelper
{
    private $styles = [];
    public function __construct()
    {
        $this->styles['padding'] = '0';
        $this->styles['margin'] = '0';
        // $this->styles['margin'] = '0';
    }
    public function get()
    {
        $styleString = '';
        foreach ($this->styles as $property => $value) {
            $styleString .= "$property: $value;";
        }
        return $styleString;
    }
    
    public function color($color)
    {
        $this->styles['color'] = $color;
        return $this;
    }

    public function backgroundColor($color)
    {
        $this->styles['background-color'] = $color;
        return $this;
    }

    public function fontSize($size)
    {
        $this->styles['font-size'] = "{$size}px";
        return $this;
    }

    public function fontFamily($fontFamily)
    {
        $this->styles['font-family'] = "'$fontFamily'";
        return $this;
    }

    public function padding($top, $right = null, $bottom = null, $left = null)
    {
        if ($right === null) {
            $right = $top;
            $bottom = $top;
            $left = $top;
        } elseif ($bottom === null) {
            $bottom = $top;
            $left = $right;
        } elseif ($left === null) {
            $left = $right;
        }
        $this->styles['padding'] = "{$top}px {$right}px {$bottom}px {$left}px";
        return $this;
    }

    public function margin($top, $right = null, $bottom = null, $left = null)
    {
        if ($right === null) {
            $right = $top;
            $bottom = $top;
            $left = $top;
        } elseif ($bottom === null) {
            $bottom = $top;
            $left = $right;
        } elseif ($left === null) {
            $left = $right;
        }
        $this->styles['margin'] = "{$top}px {$right}px {$bottom}px {$left}px";
        return $this;
    }

    public function width($width)
    {
        $this->styles['width'] = "{$width}px";
        return $this;
    }

    public function height($height)
    {
        $this->styles['height'] = "{$height}px";
        return $this;
    }

    public function border($width, $style, $color)
    {
        $this->styles['border'] = "{$width}px {$style} {$color}";
        return $this;
    }

    public function borderRadius($radius)
    {
        $this->styles['border-radius'] = "{$radius}px";
        return $this;
    }

    public function display($value)
    {
        $this->styles['display'] = $value;
        return $this;
    }

    public function position($value)
    {
        $this->styles['position'] = $value;
        return $this;
    }

    public function top($value)
    {
        $this->styles['top'] = "{$value}px";
        return $this;
    }

    public function right($value)
    {
        $this->styles['right'] = "{$value}px";
        return $this;
    }

    public function bottom($value)
    {
        $this->styles['bottom'] = "{$value}px";
        return $this;
    }

    public function left($value)
    {
        $this->styles['left'] = "{$value}px";
        return $this;
    }

    public function zIndex($value)
    {
        $this->styles['z-index'] = $value;
        return $this;
    }

    public function textAlign($value)
    {
        $this->styles['text-align'] = $value;
        return $this;
    }

    public function verticalAlign($value)
    {
        $this->styles['vertical-align'] = $value;
        return $this;
    }

    public function lineHeight($value)
    {
        $this->styles['line-height'] = "{$value}px";
        return $this;
    }

    public function letterSpacing($value)
    {
        $this->styles['letter-spacing'] = "{$value}px";
        return $this;
    }

    public function textDecoration($value)
    {
        $this->styles['text-decoration'] = $value;
        return $this;
    }

    public function textTransform($value)
    {
        $this->styles['text-transform'] = $value;
        return $this;
    }

    public function fontWeight($value)
    {
        $this->styles['font-weight'] = $value;
        return $this;
    }

    public function fontStyle($value)
    {
        $this->styles['font-style'] = $value;
        return $this;
    }

    public function overflow($value)
    {
        $this->styles['overflow'] = $value;
        return $this;
    }

    public function overflowX($value)
    {
        $this->styles['overflow-x'] = $value;
        return $this;
    }

    public function overflowY($value)
    {
        $this->styles['overflow-y'] = $value;
        return $this;
    }

    public function opacity($value)
    {
        $this->styles['opacity'] = $value;
        return $this;
    }

    public function boxShadow($hOffset, $vOffset, $blur, $spread, $color)
    {
        $this->styles['box-shadow'] = "{$hOffset}px {$vOffset}px {$blur}px {$spread}px $color";
        return $this;
    }

    public function transition($property, $duration, $timingFunction = 'ease', $delay = '0s')
    {
        $this->styles['transition'] = "$property $duration $timingFunction $delay";
        return $this;
    }

    public function transform($value)
    {
        $this->styles['transform'] = $value;
        return $this;
    }

    public function transformOrigin($x, $y)
    {
        $this->styles['transform-origin'] = "$x $y";
        return $this;
    }

    public function animation($name, $duration, $timingFunction = 'ease', $delay = '0s', $iterationCount = 1, $direction = 'normal', $fillMode = 'none', $playState = 'running')
    {
        $this->styles['animation'] = "$name $duration $timingFunction $delay $iterationCount $direction $fillMode $playState";
        return $this;
    }

    public function flex($grow, $shrink = 1, $basis = 'auto')
    {
        $this->styles['flex'] = "$grow $shrink $basis";
        return $this;
    }

    public function flexDirection($value)
    {
        $this->styles['flex-direction'] = $value;
        return $this;
    }

    public function flexWrap($value)
    {
        $this->styles['flex-wrap'] = $value;
        return $this;
    }

    public function justifyContent($value)
    {
        $this->styles['justify-content'] = $value;
        return $this;
    }

    public function alignItems($value)
    {
        $this->styles['align-items'] = $value;
        return $this;
    }

    public function alignSelf($value)
    {
        $this->styles['align-self'] = $value;
        return $this;
    }

    public function gridTemplateColumns($value)
    {
        $this->styles['grid-template-columns'] = $value;
        return $this;
    }

    public function gridTemplateRows($value)
    {
        $this->styles['grid-template-rows'] = $value;
        return $this;
    }
}