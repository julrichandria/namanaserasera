<?php

namespace App\Controllers;

class Karajia extends BaseController
{
    public function index(): string
    {
        $data = [
            'active_menu' => 'karajia',
            'title' => 'Karajia - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg',
                'initials' => 'LU'
            ],
            'rooms' => [
                [
                    'id' => 'karajia',
                    'name' => '#Karajia',
                    'description' => 'Efitra fampahalalazana',
                    'member_count' => 5,
                    'unread_count' => 0
                ],
                [
                    'id' => 'namana',
                    'name' => '#Namana',
                    'description' => 'Resadresaka ankapobeny',
                    'member_count' => 10,
                    'unread_count' => 0
                ]
            ],
            'current_room' => $this->request->getGet('room') ?? 'karajia',
            'current_room_name' => 'Karajia',
            'current_room_topic' => 'Resadresaka ankapobeny',
            'users' => [
                [
                    'username' => 'karajiabot',
                    'initials' => 'KA',
                    'is_current' => false
                ],
                [
                    'username' => 'LurissAdr',
                    'initials' => 'LU',
                    'is_current' => true
                ]
            ],
            'messages' => [
                [
                    'id' => 1,
                    'username' => 'system',
                    'user_initials' => '',
                    'message' => 'Toro-lalana: Soraty `/help`',
                    'time' => null,
                    'is_system' => true
                ],
                [
                    'id' => 2,
                    'username' => 'hery',
                    'user_initials' => 'HE',
                    'message' => 'Tongasoa eto amin\'ny Karajia',
                    'time' => '02:33',
                    'is_system' => false
                ],
                [
                    'id' => 3,
                    'username' => 'hery',
                    'user_initials' => 'HE',
                    'message' => 'Dia tonga soa eto izany ianareo. Afaka manoratra mivantana eto. Etsy ankavanana etsy ny mpikarajia 😊',
                    'time' => '02:33',
                    'is_system' => false
                ],
                [
                    'id' => 4,
                    'username' => 'hery',
                    'user_initials' => 'HE',
                    'message' => 'Fa raha mampiasa finday dia ireo menus kely etsy ambony no ampiasaina, na mampiasa ny baiko /help',
                    'time' => '12:15',
                    'is_system' => false
                ],
                [
                    'id' => 5,
                    'username' => 'admin',
                    'user_initials' => 'AD',
                    'message' => '!ping',
                    'time' => '22:23',
                    'is_system' => false
                ],
                [
                    'id' => 6,
                    'username' => 'karajiabot',
                    'user_initials' => 'KA',
                    'message' => 'Pong! 🏓 KarajiaBot dia mandeha tsara. (Uptime: 1 minitra, 21 segondra)',
                    'time' => '22:23',
                    'is_system' => false
                ]
            ]
        ];

        return view('karajia', $data);
    }
}
