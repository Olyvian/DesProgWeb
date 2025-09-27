<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu,$index = 0) {
    echo "<ul>";

    foreach ($menu as $index => $item){
        echo "<li>{$item['nama']}</li>";
        if ($item['subMenu'] ?? false) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>