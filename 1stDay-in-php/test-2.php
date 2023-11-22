<?php
echo '<h2>Even numbers</h2>';
for ($count = 1; $count <= 10; $count++) {
    if ($count % 2 == 0) {
        echo "<h4>$count</h4>";
    }
}

echo '<h2>Odd numbers</h2>';
for ($count = 1; $count <= 10; $count++) {
    if ($count % 2 != 0) {
        echo "<h4>$count</h4>";
    }
}

echo '<h2>Natural Numbers numbers</h2>';
for ($count = 1; $count <= 10; $count++) {
    echo "<h4>$count</h4>";
}

// value = 5

// -5 -4 -3 -2 -1 0 +1 +2 +3 +4 +5

echo '<h2>X numbers</h2>';
for ($count = -5; $count <= 5; $count++) {
    echo "<h4>$count</h4>";
}