<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index(): string
    {
        $data = [
            'active_menu' => 'profile',
            'title' => 'Ianao - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'display_name' => 'Ulrich Andrianina',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg',
                'gender' => 'Lehilahy',
                'location' => 'Analamanga (Madagascar)',
                'age' => 25,
                'bio' => '? Fondateur de ??????? ?????? ??, je suis passionné par tout ce qui touche au digital, à l\'entrepreneuriat et à l\'écriture. Mon site d\'information cible un public de propriétaires ...',
                'joined_date' => '2022-08-25',
                'friends_count' => 156,
                'photos_count' => 23
            ]
        ];

        return view('profile', $data);
    }
}
