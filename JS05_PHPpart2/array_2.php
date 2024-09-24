<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Tabel</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Dosen</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            echo "<tr>";
            echo "<td>{$Dosen['nama']}</td>";
            echo "<td>{$Dosen['domisili']}</td>";
            echo "<td>{$Dosen['jenis_kelamin']}</td>";
            echo "</tr>";
        ?>
    </table>
</body>
</html>


<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charaset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        
    </body>
</html> -->