<?php

declare(strict_types=1);

use App\Controller\AdvertisementController;

return [
    '/anuncios' => [AdvertisementController::class, 'list'],
    '/anuncios/adicionar' => [AdvertisementController::class, 'add'],
    '/anuncios/excluir' => [AdvertisementController::class, 'remove'],
    '/anuncios/editar' => [AdvertisementController::class, 'update'],
    '/anuncios/view' => [AdvertisementController::class, 'view'],
];
