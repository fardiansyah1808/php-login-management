<?php

namespace fardiansyah1808\PHP\Login\Management\App;

class View
{

    public static function render(string $view, $model)
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }
}
