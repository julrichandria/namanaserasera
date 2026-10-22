<?php

namespace App\Controllers;

class Album extends BaseController
{
    public function index(): string
    {
        $data = [
            'active_menu' => 'album',
            'title' => 'Sary - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'albums' => [
                [
                    'id' => 'a4ac55eaad48a5',
                    'name' => 'Sary rehetra',
                    'cover' => 'https://farm5.static.flickr.com/4026/4532149225_11ae09df36_s.jpg',
                    'photo_count' => 156,
                    'user' => 'hery'
                ],
                [
                    'id' => 'a4ac55eb100886',
                    'name' => 'Album vako',
                    'cover' => 'https://farm4.static.flickr.com/3029/4007336781_a540aaea55_s.jpg',
                    'photo_count' => 45,
                    'user' => 'isytaoaka'
                ],
                [
                    'id' => 'a54f588e3e5d0a',
                    'name' => 'Vacances',
                    'cover' => 'https://namana.serasera.org/media/images/s/Sans_titre.jpg',
                    'photo_count' => 23,
                    'user' => 'Lejaj'
                ]
            ],
            'recent_photos' => [
                [
                    'id' => 's4bcb8078eaee9',
                    'url' => 'https://farm5.static.flickr.com/4026/4532149225_11ae09df36_s.jpg',
                    'full_url' => 'https://farm5.static.flickr.com/4026/4532149225_11ae09df36.jpg',
                    'title' => 'Photo 1',
                    'user' => 'hery'
                ],
                [
                    'id' => 's4ad442f78cfea',
                    'url' => 'https://farm4.static.flickr.com/3029/4007336781_a540aaea55_s.jpg',
                    'full_url' => 'https://farm4.static.flickr.com/3029/4007336781_a540aaea55.jpg',
                    'title' => 'Photo 2',
                    'user' => 'isytaoaka'
                ],
                [
                    'id' => 's54f58afba18c2',
                    'url' => 'https://namana.serasera.org/media/images/s/Sans_titre.jpg',
                    'full_url' => 'https://namana.serasera.org/media/images/s/Sans_titre.jpg',
                    'title' => 'Photo 3',
                    'user' => 'Lejaj'
                ],
                [
                    'id' => 's46b9aef57fb9c',
                    'url' => 'https://farm3.static.flickr.com/2696/4036852962_bf041504d8_s.jpg',
                    'full_url' => 'https://farm3.static.flickr.com/2696/4036852962_bf041504d8.jpg',
                    'title' => 'Photo 4',
                    'user' => 'neopirategasy'
                ],
                [
                    'id' => 's444fac9b1c235',
                    'url' => 'https://farm3.static.flickr.com/2749/4036454476_3a1b4cd7af_s.jpg',
                    'full_url' => 'https://farm3.static.flickr.com/2749/4036454476_3a1b4cd7af.jpg',
                    'title' => 'Photo 5',
                    'user' => 'vintsy'
                ],
                [
                    'id' => 's3eea5bac5d4aa606',
                    'url' => 'https://farm3.static.flickr.com/2577/4030696797_b802f939b4_s.jpg',
                    'full_url' => 'https://farm3.static.flickr.com/2577/4030696797_b802f939b4.jpg',
                    'title' => 'Photo 6',
                    'user' => 'randria2'
                ]
            ],
            'current_page' => 1,
            'total_pages' => 26
        ];

        return view('album', $data);
    }

    public function photo($id): string
    {
        $data = [
            'active_menu' => 'album',
            'title' => 'Sary - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'photo' => [
                'id' => $id,
                'url' => 'https://farm5.static.flickr.com/4026/4532149225_11ae09df36.jpg',
                'title' => 'Photo magnifique',
                'user' => 'hery',
                'user_avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                'time' => '4 andro lasa',
                'likes' => 0,
                'comments' => 0,
                'album' => [
                    'id' => 'a4ac55eaad48a5',
                    'name' => 'Rakitsarin\'i hery'
                ]
            ],
            'comments' => []
        ];

        return view('photo_view', $data);
    }
}
