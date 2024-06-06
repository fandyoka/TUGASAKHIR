<?php
// Array untuk menyimpan data mahasiswa
$students = [
    ["name" => "Fandyoka", "age" => 20, "score" => 80],
    ["name" => "Pincen", "age" => 22, "score" => 60],
    ["name" => "Alfallah", "age" => 21, "score" => 90],
    ["name" => "Angga", "age" => 23, "score" => 70],
    ["name" => "Gilang", "age" => 20, "score" => 85],
];

// Fungsi untuk menghitung rata-rata nilai
function calculateAverageScore($students) {
    $totalScore = 0;
    $totalStudents = count($students);
    foreach ($students as $student) {
        $totalScore += $student['score'];
    }
    return $totalScore / $totalStudents;
}

// Fungsi untuk menentukan mahasiswa yang lulus dan tidak lulus
function determinePassFail($students, $passingScore = 75) {
    $results = ["pass" => [], "fail" => []];
    foreach ($students as $student) {
        if ($student['score'] >= $passingScore) {
            $results['pass'][] = $student;
        } else {
            $results['fail'][] = $student;
        }
    }
    return $results;
}

// Fungsi untuk mencari mahasiswa dengan nilai tertinggi dan terendah
function findHighestAndLowestScore($students) {
    $highest = $students[0];
    $lowest = $students[0];
    foreach ($students as $student) {
        if ($student['score'] > $highest['score']) {
            $highest = $student;
        }
        if ($student['score'] < $lowest['score']) {
            $lowest = $student;
        }
    }
    return ["highest" => $highest, "lowest" => $lowest];
}

// Menampilkan data mahasiswa
function displayStudents($students) {
    foreach ($students as $student) {
        echo "Nama: {$student['name']}, Usia: {$student['age']}, Nilai: {$student['score']}<br>";
    }
}

// Proses data
$averageScore = calculateAverageScore($students);
$passFailResults = determinePassFail($students);
$highestAndLowest = findHighestAndLowestScore($students);

// Output
echo "<h2>Data Mahasiswa:</h2>";
displayStudents($students);

echo "<h2>Rata-rata Nilai: </h2>";
echo $averageScore . "<br>";

echo "<h2>Mahasiswa yang Lulus:</h2>";
displayStudents($passFailResults['pass']);

echo "<h2>Mahasiswa yang Tidak Lulus:</h2>";
displayStudents($passFailResults['fail']);

echo "<h2>Mahasiswa dengan Nilai Tertinggi:</h2>";
echo "Nama: {$highestAndLowest['highest']['name']}, Usia: {$highestAndLowest['highest']['age']}, Nilai: {$highestAndLowest['highest']['score']}<br>";

echo "<h2>Mahasiswa dengan Nilai Terendah:</h2>";
echo "Nama: {$highestAndLowest['lowest']['name']}, Usia: {$highestAndLowest['lowest']['age']}, Nilai: {$highestAndLowest['lowest']['score']}<br>";
?>
