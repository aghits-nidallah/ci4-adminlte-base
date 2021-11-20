<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Sidebar extends BaseConfig
{
    public array $menus;

    public function __construct()
    {
        $this->menus = [
            [
                'icon' => 'fa-tachometer-alt',
                'title' => 'Dashboard',
                'link' => site_url('admin'),
            ],
            [
                'icon' => 'fa-sign-out-alt',
                'title' => 'Log Out',
                'link' => site_url('auth/logout'),
            ]
        ];
    }
}
