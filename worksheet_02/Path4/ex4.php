<?php
$scores = [60, 70, 80, 90];

// Tính Average
$avg = array_sum($scores) / count($scores);

// Tìm Max, Min
$max = max($scores);
$min = min($scores);

// Lọc điểm lớn hơn Average
$topScores = [];

foreach ($scores as $score) {
    if ($score > $avg) {
        $topScores[] = $score;
    }
}

// In kết quả
echo "Avg: " . round($avg) . ", Top: [" . implode(", ", $topScores) . "]";
?>
