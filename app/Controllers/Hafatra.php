<?php

namespace App\Controllers;

class Hafatra extends BaseController
{
    public function index(): string
    {
        $data = [
            'active_menu' => 'hafatra',
            'title' => 'Hafatra - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'current_tab' => $this->request->getGet('type') ?? 'inbox',
            'messages' => [
                [
                    'id' => 'm6ad9c3725e55f',
                    'from' => 'fillecool',
                    'from_avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg',
                    'subject' => 'salut...',
                    'time' => '3mn lasa',
                    'unread' => true
                ],
                [
                    'id' => 'm6ad5e90ca1a53',
                    'from' => 'diasa',
                    'from_avatar' => 'https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg',
                    'subject' => 'salama ianao...',
                    'time' => '3 andro lasa',
                    'unread' => true
                ],
                [
                    'id' => 'm6ac5f0f848675',
                    'from' => 'hery',
                    'from_avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'subject' => 'Salut, Ok, efa mandeha indr...',
                    'time' => '15 andro lasa',
                    'unread' => true
                ],
                [
                    'id' => 'm6abc00de7d3db',
                    'from' => 'Samoann',
                    'from_avatar' => 'https://avatar.serasera.org/613371a5d30a674c048952a2d17112bc.jpg',
                    'subject' => 'Salama ee, ???? Efa Hitan\'c�...',
                    'time' => '23 andro lasa',
                    'unread' => true
                ],
                [
                    'id' => 'm63071983c29c1',
                    'from' => 'Lurissadr',
                    'from_avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg',
                    'subject' => 'Miarahaba an\'i LurissAdr, Nan...',
                    'time' => '25/08/2022 06:41',
                    'unread' => false
                ]
            ],
            'current_page' => 1,
            'total_pages' => 1
        ];

        return view('hafatra', $data);
    }

    public function inbox($id): string
    {
        $data = [
            'active_menu' => 'hafatra',
            'title' => 'Hafatra - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'message' => [
                'id' => $id,
                'from' => 'fillecool',
                'from_avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg',
                'subject' => 'salut...',
                'time' => '3mn lasa',
                'unread' => true,
                'body' => 'Salut ! Comment ça va ? Je voulais juste te dire que je suis contente de faire ta connaissance. N hafa aho mifampiaraka ny namana Serasera.',
                'replies' => []
            ]
        ];

        return view('hafatra_view', $data);
    }

    public function compose($username = null): string
    {
        $data = [
            'active_menu' => 'hafatra',
            'title' => 'Hanoratra hafatra - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'to' => $username ?? '',
            'users' => [
                [
                    'username' => 'hery',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg'
                ],
                [
                    'username' => 'fillecool',
                    'avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg'
                ],
                [
                    'username' => 'diasa',
                    'avatar' => 'https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg'
                ]
            ]
        ];

        return view('hafatra_compose', $data);
    }
}
