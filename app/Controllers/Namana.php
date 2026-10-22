<?php

namespace App\Controllers;

class Namana extends BaseController
{
    public function index(): string
    {
        $data = [
            'active_menu' => 'namana',
            'title' => 'Lisitry ny mpikambana - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'members' => [
                [
                    'username' => 'tanjoniavotra',
                    'display_name' => 'Iavotra RAMANAMPAMONJY',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'VONTOVORONA (Madagascar)',
                    'age' => 40,
                    'bio' => ''
                ],
                [
                    'username' => 'Slouff',
                    'display_name' => 'Solofoniaina',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => '2e Arrondissement (Madagascar)',
                    'age' => null,
                    'bio' => ''
                ],
                [
                    'username' => 'Alokasisa',
                    'display_name' => 'Alokasisa',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Mahasolo (Madagascar)',
                    'age' => 23,
                    'bio' => ''
                ],
                [
                    'username' => 'DavitJack1',
                    'display_name' => 'Davit Jack',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'New York (United States)',
                    'age' => 29,
                    'bio' => 'America Suits, a trusted name and a leading company in the fashion industry, We have satisfied over 60000 customers in the last 10 years and we are keep growing, https://americasuits.com/alienoid-guar...'
                ],
                [
                    'username' => 'Fisu',
                    'display_name' => 'Raya',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Vehivavy',
                    'location' => 'Tuléar (Madagascar)',
                    'age' => 42,
                    'bio' => ''
                ],
                [
                    'username' => 'Her jp',
                    'display_name' => 'Nom Her jp',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Antananarivo (Madagascar)',
                    'age' => 31,
                    'bio' => 'J ailerai avoir des chonsons ...'
                ],
                [
                    'username' => 'Iharilanto',
                    'display_name' => 'Rahariniaina Iharilanto',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'gender' => 'Vehivavy',
                    'location' => 'Antananarivo (Madagascar)',
                    'age' => 34,
                    'bio' => 'Satriko hitantaro ny momba ahy rehetra Anefa aoka ihany hapetrako ny fetra Ny anarako efa io napetrako etsy ambony Sy ny zavatra tadiaviko amin\'ny tranokala itony....'
                ],
                [
                    'username' => 'LurissAdr',
                    'display_name' => 'Ulrich Andrianina',
                    'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Analamanga (Madagascar)',
                    'age' => 25,
                    'bio' => '? Fondateur de ??????? ?????? ??, je suis passionné par tout ce qui touche au digital, à l\'entrepreneuriat et à l\'écriture. Mon site d\'information cible un public de propriétaires ...'
                ],
                [
                    'username' => 'camsense2',
                    'display_name' => 'Camsense India',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Delhi (India)',
                    'age' => 28,
                    'bio' => 'Camsense India Pvt Ltd is a security pioneer and veteran in the Delhi-NCR region. Camsense India is a well-known CCTV dealer, distributor, and service provider for all types of high-tech security inst...'
                ],
                [
                    'username' => 'camsense',
                    'display_name' => 'camsense',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Delhi (India)',
                    'age' => 30,
                    'bio' => ''
                ],
                [
                    'username' => 'sarapatel4u',
                    'display_name' => 'sarapatel',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Vehivavy',
                    'location' => 'Kolkata (India)',
                    'age' => 29,
                    'bio' => 'Kolkata Escorts and call young ladies here 24hors at *9100000000* escort office. We have give high profile free Kolkata escort administration. https://www.sarakolkataescort.in/ https://www.kolkataang...'
                ],
                [
                    'username' => 'ATS1505',
                    'display_name' => 'ANDRIANARIMAMY TANTELY SYLVAIN',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'ANTANANARIVO (Madagascar)',
                    'age' => null,
                    'bio' => ''
                ],
                [
                    'username' => 'Perlerare65',
                    'display_name' => 'Perle',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Vehivavy',
                    'location' => 'Toamasina (Madagascar)',
                    'age' => 61,
                    'bio' => 'Je vis seule et cherche des amis pour parler de tout et de rien...'
                ],
                [
                    'username' => 'Ny Hafatra Randriantiana',
                    'display_name' => 'Randriantiana Léonnel',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Ambanja (Madagascar)',
                    'age' => 26,
                    'bio' => '"Ny teny no antoka hivelomako "...'
                ],
                [
                    'username' => 'TiXagro',
                    'display_name' => 'Tiantsoa Randrianarison',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'QC (Canada)',
                    'age' => 43,
                    'bio' => ''
                ],
                [
                    'username' => 'Sandy$',
                    'display_name' => 'Sandy$',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Antananarivo (Madagascar)',
                    'age' => 22,
                    'bio' => ''
                ],
                [
                    'username' => 'rdh36',
                    'display_name' => 'Raymond Dzery Hago',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'antananarivo (Madagascar)',
                    'age' => 29,
                    'bio' => ''
                ],
                [
                    'username' => 'Fanirizo',
                    'display_name' => 'FANIRIZO Hasina',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Antsirabe (Madagascar)',
                    'age' => 23,
                    'bio' => ''
                ],
                [
                    'username' => 'Lemsi dmk',
                    'display_name' => 'Ras lemsi',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => 'Antananarivo (Madagascar)',
                    'age' => 28,
                    'bio' => ''
                ],
                [
                    'username' => 'Arison Rakoto',
                    'display_name' => 'Arison Rakoto',
                    'avatar' => 'https://avatar.serasera.org/default.jpg',
                    'gender' => 'Lehilahy',
                    'location' => null,
                    'age' => null,
                    'bio' => 'Mbola tsy feno ny mombamomba.'
                ]
            ],
            'current_page' => 1,
            'total_pages' => 1367,
            'filter_type' => $this->request->getGet('type') ?? 'rehetra',
            'filter_gender' => $this->request->getGet('gender') ?? 'misy hoe',
            'search_query' => $this->request->getGet('q') ?? ''
        ];

        return view('namana', $data);
    }

    public function view($username): string
    {
        $data = [
            'active_menu' => 'namana',
            'title' => 'Momba an\'i ' . esc($username) . ' - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'user' => [
                'username' => $username,
                'display_name' => 'Ulrich Andrianina',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg',
                'gender' => 'Lehilahy',
                'location' => 'Analamanga (Madagascar)',
                'age' => 25,
                'bio' => '? Fondateur de ??????? ?????? ??, je suis passionné par tout ce qui touche au digital, à l\'entrepreneuriat et à l\'écriture. Mon site d\'information cible un public de propriétaires ...',
                'friends_count' => 125,
                'photos_count' => 45,
                'joined_date' => '15/05/2022'
            ],
            'posts' => [
                [
                    'username' => $username,
                    'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg',
                    'time' => '2 andro lasa',
                    'post_id' => '6ad4e59433a3a',
                    'content' => "Ho an'izay tsy mahalala dia 19 oktobra 2002 no naseho an'habaka voaloheny ny takelaky ny Namana Serasera Org.",
                    'image' => null,
                    'likes' => 3,
                    'comments' => 2,
                    'liked' => false
                ],
                [
                    'username' => $username,
                    'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg',
                    'time' => '5 andro lasa',
                    'post_id' => '6ace8b960c0c6',
                    'content' => 'Tiako zaraina aminareo fotsiny hoe efa mandeha ity raha ilainareo :-)',
                    'image' => null,
                    'likes' => 1,
                    'comments' => 0,
                    'liked' => false
                ]
            ]
        ];

        return view('namana_view', $data);
    }
}
