<?php

namespace App\Controllers;

class Vondrona extends BaseController
{
    public function index(): string
    {
        $data = [
            'active_menu' => 'vondrona',
            'title' => 'Lisitry ny vondrona - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'groups' => [
                [
                    'slug' => 'resakolondehibe',
                    'name' => 'Resak\'olondehibe',
                    'member_count' => 1806,
                    'description' => 'Vondrona natao ho an\'ny olon-dehibe irery ihany. Manaiky ianao fa feno 18 taona vao miditra ato. Ny hany hahafantaranay fa feno 18 taona ianao dia ao amin\'ny mombamomba anao....',
                    'created_date' => null
                ],
                [
                    'slug' => 'aminny-fomba-malalaka-tsy-misy-bedy',
                    'name' => 'Amin\'ny fomba malalaka tsy misy bedy',
                    'member_count' => 724,
                    'description' => '"Ame sensible s\'abstenir". Ato no afahana milaza ny zavatra tsy sahinao lazaina ampahibe maso sy ny tsy azonao lazaina na aiza na aiza. Ny tsiambaratelo amin\'ny ankapobeny.Tsy misy...',
                    'created_date' => null
                ],
                [
                    'slug' => 'eksperiansanny-fiainana',
                    'name' => 'Eksperiansan\'ny fiainana',
                    'member_count' => 372,
                    'description' => 'Eto no hifampizarantsika ny zavatra efa niainantsika(Experience vécue)santimantaly sy firaisana ara-nofo (expérience sentimentale et sexuelle).Natao hifampizarana torohevitra koa ho an\'izay mi...',
                    'created_date' => null
                ],
                [
                    'slug' => 'couple-mixte',
                    'name' => 'Couple mixte',
                    'member_count' => 313,
                    'description' => 'Eto zany isika couple mixte no mba hiresadresaka zany couple mixte zany . Gasy manambady vazaha (vazaha (etrangers) no tiako na lazaina an ! ...',
                    'created_date' => null
                ],
                [
                    'slug' => 'fanambadiana',
                    'name' => 'Fanambadiana',
                    'member_count' => 295,
                    'description' => 'Mazava ho azy fa mikasika ny fanambadiana no resahina eto.Ny mahasoa ny tokan-trano,ny olana misy ao ary ny vahaolna mety atao. Betsaka ny olana ao an-tokan-trano ary tsy azo ahahako hoy ny fiteny.Mi...',
                    'created_date' => null
                ],
                [
                    'slug' => 'sexe-party',
                    'name' => 'Sexe party',
                    'member_count' => 233,
                    'description' => 'ity sehatra ity dia misokatra ho an\'izay liana momban sexe.na mila torohevitra sns...alefaso ary e...',
                    'created_date' => null
                ],
                [
                    'slug' => 'anay-hatrany-bira',
                    'name' => 'Anay Hatrany Bira',
                    'member_count' => 232,
                    'description' => 'natao ho atseka Nipetraka sy lehibe tany Bira. Ato ro miroky sefa tsary misy atao ...Daaaaaa Likary yyyy Resaka rehetra mahakasik any any Bira ...Mety tsary hisy hahay ny zavatra resahinay sasany sa...',
                    'created_date' => null
                ],
                [
                    'slug' => 'informatique',
                    'name' => 'INFORMATIQUE',
                    'member_count' => 192,
                    'description' => 'Manampy anao amin\'ny maintenance la optimisation matériel informatique...',
                    'created_date' => null
                ],
                [
                    'slug' => 'reny-serasera',
                    'name' => 'Reny serasera',
                    'member_count' => 180,
                    'description' => 'Hifanakalozan\'ny reny traikefa...',
                    'created_date' => null
                ],
                [
                    'slug' => 'sentoni-lala',
                    'name' => 'SENTON\'I LALA',
                    'member_count' => 164,
                    'description' => 'Ity vondrona ity dia natao hifaneraserana ary ahafahantsika mpikambana manavaka marina ny fitiavana sy ny filana ka hanampy antsika amin\'ny tena fitiavana marina sy mba hahatanteraka ny nofinofin...',
                    'created_date' => null
                ]
            ],
            'current_page' => 1,
            'total_pages' => 23,
            'filter_type' => $this->request->getGet('type') ?? 'all',
            'search_query' => $this->request->getGet('q') ?? '',
            'sort_by' => $this->request->getGet('sort') ?? 'name'
        ];

        return view('vondrona', $data);
    }

    public function view($slug): string
    {
        $data = [
            'active_menu' => 'vondrona',
            'title' => 'Vondrona - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'group' => [
                'slug' => $slug,
                'name' => 'Amin\'ny fomba malalaka tsy misy bedy',
                'description' => '"Ame sensible s\'abstenir". Ato no afahana milaza ny zavatra tsy sahinao lazaina ampahibe maso sy ny tsy azonao lazaina na aiza na aiza. Ny tsiambaratelo amin\'ny ankapobeny.Tsy misy miolakolana ny resaka ary tsy hisy censure ihany koa. Tongasoa ny blagues salï¿½es! Tsy tongasoa kosa ny latsaky ny 18 taona.

Matoa miditra ato dia efa manaiky avy atrany fa mahazaka ny resaky ny mpikambana rehetra. Aoka tsy hisy menomenona tompoko azafady.',
                'creator' => 'vegas',
                'creator_avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                'created_date' => '28/10/2005 06:34',
                'member_count' => 724,
                'post_count' => 15420
            ],
            'posts' => [
                [
                    'id' => 'p1',
                    'user' => 'hery',
                    'user_avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'time' => '2 andro lasa',
                    'content' => 'Santionao rehetra ! Mba ho resadresaka amin\'ny zavatra tsy fahita-fahita...',
                    'likes' => 5,
                    'comments' => 3
                ],
                [
                    'id' => 'p2',
                    'user' => 'fillecool',
                    'user_avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg',
                    'time' => '5 andro lasa',
                    'content' => 'Tena be vanona ny vondrona io ! Misaotra an\'i vegas...',
                    'likes' => 8,
                    'comments' => 12
                ]
            ],
            'current_page' => 1,
            'total_pages' => 5
        ];

        return view('vondrona_view', $data);
    }

    public function members($slug): string
    {
        $data = [
            'active_menu' => 'vondrona',
            'title' => 'Mpikambana - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'group' => [
                'slug' => $slug,
                'name' => 'Amin\'ny fomba malalaka tsy misy bedy',
                'member_count' => 724
            ],
            'members' => [
                [
                    'username' => 'hery',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'joined_date' => '3 andro lasa'
                ],
                [
                    'username' => 'fillecool',
                    'avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg',
                    'joined_date' => '5 andro lasa'
                ],
                [
                    'username' => 'diasa',
                    'avatar' => 'https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg',
                    'joined_date' => '1 herinandro lasa'
                ],
                [
                    'username' => 'Samoann',
                    'avatar' => 'https://avatar.serasera.org/613371a5d30a674c048952a2d17112bc.jpg',
                    'joined_date' => '2 herinandro lasa'
                ],
                [
                    'username' => 'TSIAFAKE95',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'joined_date' => '1 volana lasa'
                ]
            ],
            'current_page' => 1,
            'total_pages' => 15
        ];

        return view('vondrona_members', $data);
    }

    public function admin($slug): string
    {
        $data = [
            'active_menu' => 'vondrona',
            'title' => 'Fikarakarana - Namana Serasera.org',
            'current_user' => [
                'username' => 'LurissAdr',
                'avatar' => 'https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg'
            ],
            'group' => [
                'slug' => $slug,
                'name' => 'Amin\'ny fomba malalaka tsy misy bedy',
                'creator' => 'vegas',
                'is_admin' => true
            ],
            'members' => [
                [
                    'username' => 'hery',
                    'avatar' => 'https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg',
                    'role' => 'admin',
                    'joined_date' => '3 andro lasa'
                ],
                [
                    'username' => 'fillecool',
                    'avatar' => 'https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg',
                    'role' => 'member',
                    'joined_date' => '5 andro lasa'
                ],
                [
                    'username' => 'diasa',
                    'avatar' => 'https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg',
                    'role' => 'moderator',
                    'joined_date' => '1 herinandro lasa'
                ]
            ]
        ];

        return view('vondrona_admin', $data);
    }
}
