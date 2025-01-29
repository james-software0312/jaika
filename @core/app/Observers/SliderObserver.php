<?php

namespace App\Observers;

use App\Slider;

class SliderObserver
{
    /**
     * Handle the Slider "created" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function created(Slider $slider)
    {
        \Cache::forget("home-page-slider");
    }

    /**
     * Handle the Slider "updated" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function updated(Slider $slider)
    {
        \Cache::forget("home-page-slider");
    }

    /**
     * Handle the Slider "deleted" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function deleted(Slider $slider)
    {
        \Cache::forget("home-page-slider");
    }

    /**
     * Handle the Slider "restored" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function restored(Slider $slider)
    {
        \Cache::forget("home-page-slider");
    }

    /**
     * Handle the Slider "force deleted" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function forceDeleted(Slider $slider)
    {
        \Cache::forget("home-page-slider");
    }
}
