<?php

return [
    'navbar-title' => 'Admin',
    'footer-copyright' => 'Copyright © Your Website ' . date('Y'),
    'sidebar-items' => [
        [
            'type' => 'heading',
            'text' => 'Core',
        ],
        [
            'type' => 'link',
            'text' => 'Link 1',
            'href' => '/',
            'icon' => '<i class="fas fa-tachometer-alt"></i>',
            'target' => 'parent',
            'active' => false,
            'children' => []
        ],
        [
            'type' => 'link',
            'text' => 'Link 2',
            'href' => '/',
            'icon' => '<i class="fas fa-tachometer-alt"></i>',
            'target' => 'parent',
            'active' => false,
            'children' => [
                [
                    'type' => 'link',
                    'text' => 'Link 2.1',
                    'href' => '/',
                    'icon' => '<i class="fas fa-tachometer-alt"></i>',
                    'target' => 'parent',
                    'active' => false,
                    'children' => [
                        [
                            'type' => 'link',
                            'text' => 'Link 2.1.1',
                            'href' => '/',
                            'icon' => '<i class="fas fa-tachometer-alt"></i>',
                            'target' => 'parent',
                            'active' => false,
                            'children' => [
                                [
                                    'type' => 'link',
                                    'text' => 'Link 2.1.1.1',
                                    'href' => '/',
                                    'icon' => '<i class="fas fa-tachometer-alt"></i>',
                                    'target' => 'parent',
                                    'active' => false,
                                    'children' => [
                                        [
                                            'type' => 'link',
                                            'text' => 'Link 2.1.1.1.1',
                                            'href' => '/',
                                            'icon' => '<i class="fas fa-tachometer-alt"></i>',
                                            'target' => 'parent',
                                            'active' => false,
                                            'children' => []
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'link',
                    'text' => 'Link 2.2',
                    'href' => '/',
                    'icon' => '<i class="fas fa-tachometer-alt"></i>',
                    'target' => 'parent',
                    'active' => false,
                    'children' => []
                ]
            ]
        ],
        [
            'type' => 'heading',
            'text' => 'Mawar',
        ],
        [
            'type' => 'link',
            'text' => 'Link 3',
            'href' => '/',
            'icon' => '<i class="fas fa-tachometer-alt"></i>',
            'target' => 'parent',
            'active' => false,
            'children' => [
                [
                    'type' => 'link',
                    'text' => 'Link 3.1',
                    'href' => '/',
                    'icon' => '<i class="fas fa-tachometer-alt"></i>',
                    'target' => 'parent',
                    'active' => false,
                    'children' => []
                ],
                [
                    'type' => 'link',
                    'text' => 'Link 3.2',
                    'href' => '/',
                    'icon' => '<i class="fas fa-tachometer-alt"></i>',
                    'target' => 'parent',
                    'active' => false,
                    'children' => []
                ]
            ]
        ],
    ]
];
