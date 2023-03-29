<?php

namespace App\Observers;

use App\Models\Fly;
use Illuminate\Support\Str;

class FlyObserver
{
    /**
     * Handle the Fly "created" event.
     */
    public function creating(Fly $fly): void
    {
        $fly->uuid = Str::uuid();
    }

    /**
     * Handle the Fly "updated" event.
     */
    public function updated(Fly $fly): void
    {
        //
    }

    /**
     * Handle the Fly "deleted" event.
     */
    public function deleted(Fly $fly): void
    {
        //
    }

    /**
     * Handle the Fly "restored" event.
     */
    public function restored(Fly $fly): void
    {
        //
    }

    /**
     * Handle the Fly "force deleted" event.
     */
    public function forceDeleted(Fly $fly): void
    {
        //
    }
}
