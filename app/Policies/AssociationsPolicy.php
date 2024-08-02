<?php

namespace App\Policies;

use App\Models\Associations;
use App\Models\Player;
use Illuminate\Auth\Access\Response;

class AssociationsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Player $player): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Player $player, Associations $associations): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Player $player): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Player $player, Associations $associations): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Player $player, Associations $associations): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Player $player, Associations $associations): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Player $player, Associations $associations): bool
    {
        //
    }
}
