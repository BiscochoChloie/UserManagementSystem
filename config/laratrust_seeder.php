<?php

return [
    'role_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'secretary' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'accountant' => [
            'profile' => 'r,u'
        ],
        'cashier' => [
            'profile' => 'r,u'
        ],
        'student' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
