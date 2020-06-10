<h1>Exercices 3</h1>
<?php
function concat($lastname,$firstname)
{
    $concat = $lastname." ".$firstname;
    return $concat;
}

$lastname = "fontaine";
$firstname = "Brian";

$result = concat($lastname,$firstname);
?>
<p><?=$result;?></p>