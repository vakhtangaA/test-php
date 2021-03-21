<?php include 'includes/header.php'; ?>
<?php

echo '<h2>If Statement</h2>';

$grade = 40;

if ($grade >= 50) {
    echo '<h3 style="background-color: green">You have passed</h3>';
} else {
    echo '<h3 style="background-color: red">You have failed</h3>';
}

$grade = 'B';

if ($grade == 'A') {
    echo '<h2>You are a superstar</h2>';
} elseif ($grade == 'B') {
    echo '<h2>You are a superstar-</h2>';
} else {
    echo '<h2>You failed</h2>';
}

?>
</body>

</html>