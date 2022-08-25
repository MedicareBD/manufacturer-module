<?php

return [
    'name' => 'Manufacturer',

    'menus' => [
        [
            'text' => 'Manufacturer',
            'icon' => 'fas fa-industry',
            'can' => 'manufacturer-read',
            'order' => 11,
            'submenu' => [
                [
                    'text' => 'Add Manufacturer',
                    'route' => 'admin.manufacturer.create',
                    'can' => 'manufacturer-create',
                    'order' => 11,
                ],
                [
                    'text' => 'Manage Manufacturer',
                    'route' => 'admin.manufacturer.index',
                    'can' => 'manufacturer-read',
                    'order' => 11,
                ],
                [
                    'text' => 'Customer Ledger',
                    'route' => 'admin.manufacturer.ledger',
                    'can' => 'manufacturer-ledger-read',
                    'order' => 11,
                ],
            ],
        ],
    ],
];
