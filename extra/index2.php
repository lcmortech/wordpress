<?php

    $names = array('Brad', 'John', 'Jane', 'Meowsalot');

    $count = 1;

    while(count < count($names)) {
        echo"<li>Hi, my name is $names[$count] </li>";
        $count++;
    }

    // while($count <= 100) {
    //     echo "<li>$count</li>";
    //     $count++;
    // }
?>

<p>Hi, my name is <?php echo $names[3]; ?>.</p>