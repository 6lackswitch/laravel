<?php

return [
        
    'permissons_map' => [
            'r' => 'read',
            'c' => 'create',
            'e' => 'edit',
            'd' => 'delete',
    ],

    'roles' => [
            'admin',
            'viewer',
            'editor',
            'moderator',
    ],

    'roles_has_permissions' => [
            'admin' => 'r, c, e, d',
            'viewer' => 'r, c',
            'editor' => 'r, c, e',
            'moderator' => 'r, c, e',
    ],
];