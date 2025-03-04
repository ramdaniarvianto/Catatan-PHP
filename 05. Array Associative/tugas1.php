<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajan</title>
    <style>
        * {
            list-style: none;
        }
        body {
            font-family: 'Arial';
        }
        img {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $jajans = [
        [
            "gambar" => "baksomukidi.jpg",
            "menu" => "Bakso Spesial Mukidi",
            "isi" => "1 Bakso Besar, 2 Iga Sapi, (Opsional: Mie Kuning, Mie Bihun, Sayuran)",
            "rasa" => "Gurih | Sedang | Pedas",
            "harga" => "Rp. 45.000"
        ],
        [
            "gambar" => "mieayambakso.jpeg",
            "menu" => "Mie Ayam Bakso Urat",
            "isi" => "Mie Ayam, 1 Bakso Urat, 2 Bakso Kecil, Daging Ayam, Sayur",
            "rasa" => "Gurih | Sedang | Pedas",
            "harga" => "Rp. 20.000"
        ],
        [
            "gambar" => "seblakprasmanan.jpg",
            "menu" => "Seblak Prasmanan",
            "isi" => "Mie Kuning, 3 Bakso, 1 Sosis, 3 Dumpling Keju, 2 Dumpling Ayam, Makaroni, Kerupuk, Telur, Otak-otak, Tulangan, Sayuran",
            "rasa" => "Gurih | Sedang | Pedas",
            "harga" => "Rp. 35.000"
        ],
        [
            "gambar" => "batagor.jpg",
            "menu" => "Batagor",
            "isi" => "2 Batagor isi Telur, 6 Batagor biasa, 3 Pangsit Goreng, 2 Tahu Goreng, 2 Otak-otak, Timun",
            "rasa" => "Gurih | Sedang | Pedas",
            "harga" => "Rp. 20.000"
        ],
        [
            "gambar" => "nasigoreng.jpeg",
            "menu" => "Nasi Goreng Seafood",
            "isi" => "Nasi Goreng, Daging Ayam, Sosis, Bakso, Udang, Cumi, Daging Kepiting, Sayuran",
            "rasa" => "Gurih | Sedang | Pedas",
            "harga" => "Rp. 35.000"
        ],
        [
            "gambar" => "airmineral.jpg",
            "menu" => "Air Mineral",
            "isi" => "Air Mineral (Ukuran: Small | Large)",
            "rasa" => "(Small: Tidak Dingin | Dingin) | (Large: Tidak Dingin | Dingin)",
            "harga" => "kosong"
        ],
        [
            "gambar" => "tea.jpg",
            "menu" => "Tea",
            "isi" => "Tea (Ukuran: Small | Large | X-Large)",
            "rasa" => "(Less Sugar: Hangat | Dingin) | (Sugar: Hangat | Dingin)",
            "harga" => "Rp. (S)15.000 | (L)18.000 | (XL)20.000"
        ],
        [
            "gambar" => "cappuccino.jpg",
            "menu" => "Capuccino",
            "isi" => "Capuccino (Ukuran: Small | Large | X-Large)",
            "rasa" => "(Less Sugar: Hangat | Dingin) | (Sugar: Hangat | Dingin)",
            "harga" => "Rp. (S)18.000 | (L)20.000 | (XL)22.000"
        ],
        [
            "gambar" => "bobamilk.jpg",
            "menu" => "Boba Milk Brown Sugar",
            "isi" => "Boba, Brown Sugar, Fresh Milk, Cheese Cream",
            "rasa" => "Sugar: Dingin",
            "harga" => "Rp. 18.000"
        ],
        [
            "gambar" => "elemint.jpg",
            "menu" => "Elemint",
            "isi" => "Mint Ice Cream, Oreo Cookies, Chocolate Chips, Fudge",
            "rasa" => "Manis: Dingin",
            "harga" => "Rp. 20.000"
        ]
    ];
    ?>

    <h1>Menu Jajan</h1>

    <?php foreach ($jajans as $jajan) : ?>
        <ul>
            <li><img src="image/<?php echo $jajan["gambar"] ?>"></li>
            <li><strong>Menu:</strong> <?php echo $jajan["menu"] ?></li>
            <li><strong>Isi:</strong> <?php echo $jajan["isi"] ?></li>
            <li><strong>Rasa:</strong> <?php echo $jajan["rasa"] ?></li>
            <li><strong>Harga:</strong> <?php echo $jajan["harga"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>