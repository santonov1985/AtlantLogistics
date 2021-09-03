<?php

namespace App\Models\Service\Repository;

use App\Models\Service\Entity\Service;

class ServiceRepository
{
    public function getCreate(
        string $title,
        string $img,
        string $description
    )
    {
        $service = new Service();

        $service->title = $title;
        $service->icon = $img;
        $service->description = $description;
        $service->saveOrFail();

        return $service;
    }

    public function getUpdate(
        Service $service,
        string $title,
        string $icon = null,
        string $description = null
    )
    {
        $service->title = $title;

        if ($icon !== null) {
            $service->icon = $icon;
        }

        $service->description = $description;
        $service->saveOrFail();

        return $service;
    }
}
