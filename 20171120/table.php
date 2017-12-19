<?php
    $data=array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)   
    )
?>

<table border = 1>
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php
    for($i=0;$i<count($data);$i++)
    {
        echo '<tr>';
        for($j=0;$j<count($data[$i]);$j++)
        {
            echo '<td>'.$data[$i][$j].'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>

<table border = 1>
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php
    foreach ($data as $value)
    {
        echo '<tr>';
        foreach ($value as $value2)
        {
            echo '<td>'.$value2.'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>

<table border = 1>
    <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
    </tr>
    <?php
    function td($arr2)
    {   
        echo "<td>$arr2</td>";
    }

    function tr($arr)
    {
        echo "<tr>";
        array_map("td",$arr);
        echo "</tr>";
    }

    array_map("tr", $data);
    

    ?>
</table>