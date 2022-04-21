<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #ccc;
        }
    </style>
</head>

<?php
$mahasiswa = [
    [
        "Nama" => "Andi",
        "NIM" => "2101001",
        "Nilai UTS" => "87",
        "Nilai UAS" => "65"
    ],
    [
        "Nama" => "Budi",
        "NIM" => "2101002",
        "Nilai UTS" => "30",
        "Nilai UAS" => "79"
    ],
    [
        "Nama" => "Tono",
        "NIM" => "2101003",
        "Nilai UTS" => "75",
        "Nilai UAS" => "80"
    ],
    [
        "Nama" => "Jessica",
        "NIM" => "2101004",
        "Nilai UTS" => "10",
        "Nilai UAS" => "75"
    ]
];

function hitungNilaiAkhir($UTS, $UAS)
{
    $UTS *= 0.4;
    $UAS *= 0.6;
    return $UTS + $UAS;
}

function hitungHuruf($nilaiAkhir)
{
    if ($nilaiAkhir >= 80) {
        return "A";
    } else if ($nilaiAkhir >= 70) {
        return "B";
    } else if ($nilaiAkhir >= 60) {
        return "C";
    } else if ($nilaiAkhir >= 50) {
        return "D";
    } else {
        return "E";
    }
}

for ($i = 0; $i < count($mahasiswa); $i++) {
    $mahasiswa[$i]['Nilai Akhir'] = hitungNilaiAkhir($mahasiswa[$i]["Nilai UTS"], $mahasiswa[$i]["Nilai UAS"]);
    $mahasiswa[$i]['Huruf'] = hitungHuruf(hitungNilaiAkhir($mahasiswa[$i]["Nilai UTS"], $mahasiswa[$i]["Nilai UAS"]));
}

echo "<table>";
echo "<tr>";
foreach ($mahasiswa[0] as $key => $value) {
    echo "<th>" . $key . "</th>";
}
echo "</tr>";
foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    foreach ($mhs as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>