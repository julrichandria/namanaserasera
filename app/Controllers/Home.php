<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'active_menu' => 'home',
            'title' => 'Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'posts' => [
                [
                    'username' => 'fillecool',
                    'avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg',
                    'time' => '17mn lasa',
                    'post_id' => '6ad9bdd13169c',
                    'content' => 'fandalovana nu eto antany',
                    'image' => null,
                    'likes' => 0,
                    'comments' => 0,
                    'liked' => false
                ],
                [
                    'username' => 'hery',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'time' => '4 andro lasa',
                    'post_id' => '6ad4e59433a3a',
                    'content' => "Ho an'izay tsy mahalala dia 19 oktobra 2002 no naseho an'habaka voalohany ny takelaky ny Namana Serasera Org. Hafa tanteraka ny endriny tamin'izany, mety hitahitanareo any ambadimbadika any ihany.",
                    'image' => 'https://namana.serasera.org/album/sary/preview/s6ad4e5519fbb8',
                    'likes' => 3,
                    'comments' => 3,
                    'liked' => true
                ],
                [
                    'username' => 'hery',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'time' => '9 andro lasa',
                    'post_id' => '6ace8b960c0c6',
                    'content' => "Tiako zaraina aminareo fotsiny hoe efa mandeha ity raha ilainareo :-) <br />Ny karajia dia toerana fifampiresahanay mivantana taloha. Dia nijanona elaela izy io noho ny olana teknika. Amin'izao dia naveri...",
                    'image' => 'https://namana.serasera.org/album/sary/preview/s6ace8b65ec651',
                    'likes' => 1,
                    'comments' => 2,
                    'liked' => false
                ],
                [
                    'username' => 'TSIAFAKE95',
                    'avatar' => 'https://avatar.serasera.org/6709112c6aa0db5af3b465722099b254.jpg',
                    'time' => '12 andro lasa',
                    'post_id' => '6aca4bfbe3163',
                    'content' => 'Resaka fiainana',
                    'image' => null,
                    'likes' => 0,
                    'comments' => 0,
                    'liked' => false
                ],
                [
                    'username' => 'diasa',
                    'avatar' => 'https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg',
                    'time' => '14 andro lasa',
                    'post_id' => '6ac7a30139642',
                    'content' => 'lay tany Morondava',
                    'image' => 'https://namana.serasera.org/album/sary/preview/s6ac7a2e5c5f3c',
                    'likes' => 2,
                    'comments' => 2,
                    'liked' => false
                ],
                [
                    'username' => 'Slay12',
                    'avatar' => 'https://avatar.serasera.org/b0f646d4362cfa2bb140bbe07bb7f645.jpg',
                    'time' => '15 andro lasa',
                    'post_id' => '6ac5f39a507db',
                    'content' => 'salama daoly ry reto an . vaovao zah mitady namana 😊',
                    'image' => null,
                    'likes' => 1,
                    'comments' => 1,
                    'liked' => false
                ],
                [
                    'username' => 'Solokov',
                    'avatar' => 'https://avatar.serasera.org/a1b565b8a0b45706da667dff60ba070e.jpg',
                    'time' => '18 andro lasa',
                    'post_id' => '6ac20e3fe9c9a',
                    'content' => 'Mitady vehivavy hiresadresaka',
                    'image' => null,
                    'likes' => 0,
                    'comments' => 0,
                    'liked' => false
                ],
                [
                    'username' => 'AnadrielleBr',
                    'avatar' => 'https://avatar.serasera.org/8ec43e804cdfa79690eb0fa9cba86c00.jpg',
                    'time' => '20 andro lasa',
                    'post_id' => '6abfe10b73512',
                    'content' => "Manao ahoana daholo, fiarahabana avy any Brezila, tena mahaliana ny mahafantatra ity vondrom-piarahamonina ity!",
                    'image' => null,
                    'likes' => 1,
                    'comments' => 0,
                    'liked' => false
                ],
                [
                    'username' => 'Iharilanto',
                    'avatar' => 'https://avatar.serasera.org/0df1220e01f5ffea530f8c9e9339a7b0.jpg',
                    'time' => '22 andro lasa',
                    'post_id' => '6abc9dd585fbf',
                    'content' => 'Mba souvenir Ambondrona 25 ans.',
                    'image' => null,
                    'likes' => 1,
                    'comments' => 4,
                    'liked' => false
                ],
                [
                    'username' => 'Aristolain',
                    'avatar' => 'https://avatar.serasera.org/12f3c56c647c4e2643da6ed1be04519d.jpg',
                    'time' => '28 andro lasa',
                    'post_id' => '6ab5369c2cac9',
                    'content' => 'mitafy namana vehivavy',
                    'image' => null,
                    'likes' => 2,
                    'comments' => 0,
                    'liked' => false
                ]
            ],
            'recent_photos' => [
                [
                    'url' => 'https://namana.serasera.org/namana/hery/album/a4ac55eaad48a5/s4bcb8078eaee9',
                    'thumb' => 'https://farm5.static.flickr.com/4026/4532149225_11ae09df36_s.jpg'
                ],
                [
                    'url' => 'https://namana.serasera.org/namana/isytaoaka/album/a4ac55eb100886/s4ad442f78cfea',
                    'thumb' => 'https://farm4.static.flickr.com/3029/4007336781_a540aaea55_s.jpg'
                ],
                [
                    'url' => 'https://namana.serasera.org/namana/Lejaj/album/a54f588e3e5d0a/s54f58afba18c2',
                    'thumb' => 'https://namana.serasera.org/media/images/s/Sans_titre.jpg'
                ],
                [
                    'url' => 'https://namana.serasera.org/namana/neopirategasy/album/a4ac55f1db9035/s46b9aef57fb9c',
                    'thumb' => 'https://farm3.static.flickr.com/2696/4036852962_bf041504d8_s.jpg'
                ],
                [
                    'url' => 'https://namana.serasera.org/namana/vintsy/album/a4ac55f01048eb/s444fac9b1c235',
                    'thumb' => 'https://farm3.static.flickr.com/2749/4036454476_3a1b4cd7af_s.jpg'
                ],
                [
                    'url' => 'https://namana.serasera.org/namana/randria2/album/a4ac55eb11832c/s3eea5bac5d4aa606',
                    'thumb' => 'https://farm3.static.flickr.com/2577/4030696797_b802f939b4_s.jpg'
                ]
            ],
            'csrf_token' => csrf_hash()
        ];

        return view('home', $data);
    }

    public function post($username, $postId): string
    {
        log_message('debug', 'Post method called with username: ' . $username . ', postId: ' . $postId);

        $data = [
            'active_menu' => 'home',
            'title' => 'Post',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'post' => [
                'username' => 'hery',
                'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                'time' => '4 andro lasa',
                'post_id' => '6ad4e59433a3a',
                'created_at' => '18/10/2026 03:28:20',
                'content' => "Ho an'izay tsy mahalala dia 19 oktobra 2002 no naseho an'habaka voalohany ny takelaky ny Namana Serasera Org. Hafa tanteraka ny endriny tamin'izany, mety hitahitanareo any ambadimbadika any ihany.",
                'image' => 'https://namana.serasera.org/album/sary/preview/s6ad4e5519fbb8',
                'likes' => 3,
                'comments' => 3,
                'liked' => true
            ],
            'comments_list' => [
                [
                    'username' => 'diasa',
                    'avatar' => 'https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg',
                    'time' => '3 andro lasa',
                    'content' => 'Joyeux anniversaires e!',
                    'likes' => 0
                ],
                [
                    'username' => 'Samoann',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'time' => '3 andro lasa',
                    'content' => 'waouhh, ary efa tena ela tokoa izy ity a,',
                    'likes' => 0
                ],
                [
                    'username' => 'ANARIM',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'time' => '2 andro lasa',
                    'content' => 'dona kely!',
                    'likes' => 0
                ]
            ],
            'csrf_token' => csrf_hash()
        ];

        return view('post', $data);
    }

    public function notifications(): string
    {
        $data = [
            'active_menu' => 'home',
            'title' => 'Fampatsiahivana - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'notifications' => [
                [
                    'id' => 1,
                    'type' => 'like',
                    'user' => 'hery',
                    'user_avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'message' => 'hery tianao ny sary-nao',
                    'time' => '2 mn lasa',
                    'unread' => true
                ],
                [
                    'id' => 2,
                    'type' => 'comment',
                    'user' => 'fillecool',
                    'user_avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg',
                    'message' => 'fillecool nanorata hevitra ny post-nao',
                    'time' => '15 mn lasa',
                    'unread' => true
                ],
                [
                    'id' => 3,
                    'type' => 'friend',
                    'user' => 'diasa',
                    'user_avatar' => 'https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg',
                    'message' => 'diasa nangataka ho namana',
                    'time' => '1 ora lasa',
                    'unread' => true
                ],
                [
                    'id' => 4,
                    'type' => 'system',
                    'user' => null,
                    'user_avatar' => null,
                    'message' => 'Tongasoa amin\'ny Namana Serasera!',
                    'time' => '2 andro lasa',
                    'unread' => false
                ],
                [
                    'id' => 5,
                    'type' => 'like',
                    'user' => 'Slay12',
                    'user_avatar' => 'https://avatar.serasera.org/b0f646d4362cfa2bb140bbe07bb7f645.jpg',
                    'message' => 'Slay12 tianao ny post-nao',
                    'time' => '3 andro lasa',
                    'unread' => false
                ]
            ]
        ];

        return view('notifications', $data);
    }
}
