<?php

namespace App\Observers;

use App\Models\Association;

class AssociationObserver
{
    /**
     * Handle the Association "created" event.
     */
    public function created(Association $association): void
    {
        //
        $association->id = mt_rand(100000, 999999);
    }

    /**
     * Handle the Association "updated" event.
     */
    public function updated(Association $association): void
    {
        //
    }

    /**
     * Handle the Association "deleted" event.
     */
    public function deleted(Association $association): void
    {
        //
    }

    /**
     * Handle the Association "restored" event.
     */
    public function restored(Association $association): void
    {
        //
    }

    /**
     * Handle the Association "force deleted" event.
     */
    public function forceDeleted(Association $association): void
    {
        //
    }
}
