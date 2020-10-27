<?php

declare(strict_types=1);

namespace App\Component\Action;

use App\Component\Actor\ActorInterface;
use App\Component\Place\PlaceInterface;

class LocateAction
{
    public function locateActor(ActorInterface $actor, PlaceInterface $place)
    {
        return sprintf('%s is in %s', $actor->getFullname(), $place->getName());
    }
}