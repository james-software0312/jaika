<?php

namespace App\PageBuilder\Helpers\Traits;

trait RenderMegaMenuView{
    public function renderMegaMenuViews($blade_name,$blade_data = []): string
    {
        return view('categorymenu::' . $blade_name, $blade_data)->render();
    }
}