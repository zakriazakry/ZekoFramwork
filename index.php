<?php
require_once 'vendor/autoload.php';
use widgetEngine\Text;
use widgetEngine\CssHelper;

class Index
{
    public function __construct()
    {
        $css = new CssHelper();
        $this->body(
            'Login',
            'https://cdn-icons-png.flaticon.com/256/295/295128.png',
            [
                (new Text("nooh!",
                    $css
                        ->backgroundColor('red')
                        ->padding('0')
                        ->margin('0')
                        ->get()
                ))->get(),
                (new Text("nooh!",
                    $css
                        ->backgroundColor('red')
                        ->padding('0')
                        ->margin('0')
                        ->get()
                ))->get(),
            ],
            $css->color('blue')->backgroundColor('black')->get()
        );
    }

    private function body($title, $icon, array $listItems, $bodyCSS)
    {
        $listItemsHtml = '';
        foreach ($listItems as $item) {
            $listItemsHtml .= "<div>$item</div>";
        }

        echo <<<HTML
        <!DOCTYPE html>
        <html lang="ar">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>
            <link rel="icon" type="image/x-icon" href="$icon">
        </head>
        <body style="$bodyCSS">
            $listItemsHtml
        </body>
        </html>
        HTML;
    }
}

new index();
