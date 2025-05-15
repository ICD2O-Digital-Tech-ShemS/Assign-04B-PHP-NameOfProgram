<?php
const $ANS
const $DISPLAY = "";
const $TOTAL = "";
$order = $_POST['order']
$side = $_POST['side']

if (order == 1 )  {
    ans = "You chose option 1 $19";
} else if (order == 2) {
    ans = "You chose option 2 $18";
}else {
    ans = "You did not enter a maine dish";
}

if (side == "Fries")  {
    display = "Your side is $2";
} else if (side == "Coke") {
    display = "Your side is $6";
}
else {
    display = "You did not enter a side";
}

if (ans == "You chose option 1 $19" && display == "Your side is $2")  {
    total = "Your total is $22 pluse TAX";
} else if (ans == "You chose option 1 $19" && display == "Your side is $6") {
    total = "Your total is $26 pluse TAX";
} else if (ans == "You chose option 2 $18" && display == "Your side is $2") {
    total = "Your total is $21 pluse TAX";
} else if (ans == "You chose option 2 $18" && display == "Your side is $6") {
    total = "Your total is $25 pluse TAX";
}else if (ans == "You chose option 1 $19") {
    total = "Your total is $20 pluse TAX";
} else if (ans == "You chose option 2 $18") {
    total = "Your total is $19 pluse TAX";
}else if (display == "Your side is $6") {
    total = "Your total is $7 pluse TAX ";
} else if (display == "Your side is $2") {
    total = "Your total is $3 pluse TAX ";
}
else {
    total = "You did not enter a side";
}

?>
<h3>Results:</h3>
<?php echo "$ans" ?>
<?php echo "$display" ?>
<?php echo "$total" ?>