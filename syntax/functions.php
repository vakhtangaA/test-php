<?php include 'includes/header.php'; ?>
<?php

function writeMessage()
{
    echo "Hello koala <br />";
};

writeMessage();


function addNumbers($num1, $num2)
{
    $sum = $num1 + $num2;

    echo "The sum of $num1 and $num2 is: $sum <br />";
}

addNumbers(22, 222);

?>
</div>
</body>

</html>