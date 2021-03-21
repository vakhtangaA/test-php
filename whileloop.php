<?php include 'includes/header.php'; ?>

<?php

$grade = 0;

while ($grade < 10) {
    echo '<p>I am Less than 10 -- ' . $grade . '</p>';
    $grade++;
}
echo '<h1>---------------------------------------------------------</h1>';
$grade = 0;
do {
    echo '<p>I am Less than 10 -- ' . $grade . '</p>';
    $grade++;
} while ($grade < 10);

?>
</body>

</html>