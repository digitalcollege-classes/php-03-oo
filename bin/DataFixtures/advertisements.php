<?php

declare(strict_types=1);

use App\Enum\AdvertisementStatusEnum;

return [
    [
        'advertiserId' => 1,
        'categoryId' => 1,
        'title' => 'Honda Civic 2014 completo',
        'description' => 'Veículo bem conservado, IPVA 2025 pago.',
        'price' => 45000.00,
        'status' => AdvertisementStatusEnum::ACTIVE,
        'ACTIVEAt' => '2025-06-01 10:00:00',
        'createdAt' => '2025-05-30 08:30:00',
        'updatedAt' => '2025-06-01 10:00:00',
    ],
    [
        'advertiserId' => 2,
        'categoryId' => 2,
        'title' => 'Apartamento 2 quartos na Aldeota',
        'description' => 'Próximo ao shopping, com vaga de garagem.',
        'price' => 320000.00,
        'status' => AdvertisementStatusEnum::ACTIVE,
        'ACTIVEAt' => '2025-05-15 09:00:00',
        'createdAt' => '2025-05-14 17:00:00',
        'updatedAt' => '2025-05-15 09:00:00',
    ],
    [
        'advertiserId' => 3,
        'categoryId' => 3,
        'title' => 'iPhone 13 128GB',
        'description' => 'Aparelho novo, com nota fiscal e garantia.',
        'price' => 4300.00,
        'status' => AdvertisementStatusEnum::ACTIVE,
        'ACTIVEAt' => null,
        'createdAt' => '2025-06-10 11:20:00',
        'updatedAt' => '2025-06-10 11:20:00',
    ],
    [
        'advertiserId' => 4,
        'categoryId' => 4,
        'title' => 'Vestido longo de festa',
        'description' => 'Tamanho M, usado uma única vez.',
        'price' => 180.00,
        'status' => AdvertisementStatusEnum::PAUSED,
        'ACTIVEAt' => '2025-04-25 15:00:00',
        'createdAt' => '2025-04-20 13:30:00',
        'updatedAt' => '2025-04-25 15:00:00',
    ],
    [
        'advertiserId' => 5,
        'categoryId' => 5,
        'title' => 'Mesa de jantar com 6 cadeiras',
        'description' => 'Em ótimo estado, feita em madeira maciça.',
        'price' => 900.00,
        'status' => AdvertisementStatusEnum::SOLD,
        'ACTIVEAt' => '2025-05-02 14:00:00',
        'createdAt' => '2025-05-01 10:30:00',
        'updatedAt' => '2025-05-03 16:10:00',
    ],
    [
        'advertiserId' => 6,
        'categoryId' => 6,
        'title' => 'Serviço de encanador 24h',
        'description' => 'Atendimento em Fortaleza e região metropolitana.',
        'price' => null,
        'status' => AdvertisementStatusEnum::ACTIVE,
        'ACTIVEAt' => '2025-06-05 08:45:00',
        'createdAt' => '2025-06-03 19:20:00',
        'updatedAt' => '2025-06-05 08:45:00',
    ],
    [
        'advertiserId' => 7,
        'categoryId' => 7,
        'title' => 'Filhotes de Golden Retriever',
        'description' => 'Vacinados e vermifugados, com 60 dias.',
        'price' => 1200.00,
        'status' => AdvertisementStatusEnum::ACTIVE,
        'ACTIVEAt' => '2025-05-28 10:00:00',
        'createdAt' => '2025-05-27 14:10:00',
        'updatedAt' => '2025-05-28 10:00:00',
    ],
    [
        'advertiserId' => 8,
        'categoryId' => 8,
        'title' => 'Freelancer: Desenvolvedor Front-End',
        'description' => 'Experiência com React, HTML, CSS e JavaScript.',
        'price' => null,
        'status' => AdvertisementStatusEnum::ACTIVE,
        'ACTIVEAt' => null,
        'createdAt' => '2025-06-18 12:00:00',
        'updatedAt' => '2025-06-18 12:00:00',
    ],
    [
        'advertiserId' => 9,
        'categoryId' => 10,
        'title' => 'Kit de ferramentas para construção',
        'description' => 'Com 45 peças, ideal para reformas residenciais.',
        'price' => 299.99,
        'status' => AdvertisementStatusEnum::INACTIVE,
        'ACTIVEAt' => null,
        'createdAt' => '2025-05-07 16:00:00',
        'updatedAt' => '2025-05-09 09:00:00',
    ],
    [
        'advertiserId' => 10,
        'categoryId' => 11,
        'title' => 'Violão acústico Giannini',
        'description' => 'Excelente sonoridade, acompanha capa.',
        'price' => 620.00,
        'status' => AdvertisementStatusEnum::ACTIVE,
        'ACTIVEAt' => '2025-06-20 17:10:00',
        'createdAt' => '2025-06-19 11:45:00',
        'updatedAt' => '2025-06-20 17:10:00',
    ],
];
