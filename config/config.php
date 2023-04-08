<?php

return [
    /**
     * Navbar configuration
     */
    'navbar' => [
        'brand-title' => 'SB Admin', // required, navbar brand title
        'brand-href' => '/admin', // required, navbar brand href link
        'dropdown' => [
            'icon' => '<i class="fas fa-user fa-fw"></i>', // required
            /**
             * dropdown items
             * 
             * available type: link, divider, view
             */
            'items' => [ // optional
                [
                    'type' => 'link', // required
                    'text' => 'Link 1', // required
                    'href' => '/', // required
                    'target' => '_parent', // optional
                    'hidden' => false, // optional, will hide the item when true
                ],
                [
                    'type' => 'divider' // required
                ],
                [
                    'type' => 'link',
                    'text' => 'Link 2',
                    'href' => '/',
                    'target' => '_parent',
                    'hidden' => false,
                ],
                [
                    'type' => 'divider'
                ],
                [
                    'type' => 'view', // required
                    'view' => 'laravel-sb-admin-template::partials.navbar-dropdown-item-form', // view path
                ]
            ]
        ],
    ],
    /**
     * Footer configuration
     */
    'footer' => [
        'copyright' => 'Copyright © Your Website ' . date('Y'), // required
    ],
    /**
     * Sidebar configuration
     */
    'sidebar' => [
        /**
         * Sidebar items
         * 
         * available types: heading, link
         */
        'items' => [
            [
                'type' => 'heading', // required
                'text' => 'Main Menu', // required
                'hidden' => false, // optional, will hide the heading if true
            ],
            [
                'type' => 'link', // required
                'text' => 'Link 1', // required,
                'icon' => '<i class="fas fa-circle fa-fw"></i>', // optional
                'href' => '', // required
                'target' => '_parent', // optional
                'active' => false, // optional
                'hidden' => false, // optional, will hide the link and its children if true
                'children' => [], // optional, children link. the children config is same as this link config
            ],
            [
                'type' => 'link',
                'text' => 'Link 2',
                'icon' => '<i class="fas fa-circle fa-fw"></i>',
                'href' => '/',
                'target' => '_parent',
                'active' => false,
                'hidden' => false,
                'children' => [
                    [
                        'type' => 'link',
                        'text' => 'Link 2.1',
                        'icon' => '<i class="fas fa-circle fa-fw"></i>',
                        'href' => '/',
                        'target' => '_parent',
                        'active' => false,
                        'hidden' => false,
                        'children' => [],
                    ],
                    [
                        'type' => 'link',
                        'text' => 'Link 2.2',
                        'icon' => '<i class="fas fa-circle fa-fw"></i>',
                        'href' => '/',
                        'target' => '_parent',
                        'active' => false,
                        'hidden' => false,
                        'children' => []
                    ]
                ]
            ],
        ]
    ]
];
