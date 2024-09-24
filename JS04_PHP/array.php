    <?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

    $nilaiLulus = [];

    foreach ($nilaiSiswa as $nilai) { 
        if ($nilai >= 70) {
            $nilaiLulus[] = $nilai;
        }
    }

    echo "Daftar nilai siswa yang lulus: " . implode(',',$nilaiLulus);

    echo "<hr>";

    $daftarKaryawan = [
        ['Alice', 7],
        ['Bob', 3],
        ['Charlie', 9],
        ['David', 5],
        ['Eva', 6],
    ];

    $karyawanPengalamanLimaTahun = [];

    foreach ($daftarKaryawan as $karyawan){
        if ($karyawan[1] > 5 ) {
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }

    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',',
    $karyawanPengalamanLimaTahun);

    echo "<hr>";
$daftarNilai = [
    'Matematika' =>[
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],

    'Fisika' =>[
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' =>[
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<hr>";
// Two-dimensional array of students and their grades
$students = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

// Calculate the total score and number of students
$totalScore = 0;
$numberOfStudents = count($students);

// Loop through the array to calculate the total score
foreach ($students as $student) {
    $totalScore += $student[1]; // Access grade using index 1
}

// Calculate the class average
$classAverage = $totalScore / $numberOfStudents;

// Print the class average
echo "Class average: " . number_format($classAverage, 2) . "<br>";

// Print the names and grades of students who scored above the class average
echo "Students who scored above the class average:<br>";

foreach ($students as $student) {
    $name = $student[0]; // Access name using index 0
    $grade = $student[1]; // Access grade using index 1
    
    if ($grade > $classAverage) {
        echo "$name: $grade <br>";
    }
}
    ?>