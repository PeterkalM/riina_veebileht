<?php
include("header.php");

class MyDB extends SQLite3 {
    function __construct() {
        $this->open('data.db');
    }
}

$db = new MyDB();

if (!$db) {
    echo $db->lastErrorMsg();
}

$type   = $_GET["type"];
$submit = $_GET["otsing"];

echo "<table class=\"table table-striped\">";
echo "<thead>";
echo "<tr>";
echo "<th>Ladinakeelne nimetus</th>";
echo "<th>Eestikeelne nimetus</th>";
echo "<th>Taime sort</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if (is_null($submit)) {
    switch ($type) {
        case "lehtpuud":
            $sql = "SELECT * from Lehtpuud ORDER BY Ladinakeelne";
            addColumns($db->query($sql));
            break;
        case "okaspuud":
            $sql = "SELECT * from Okaspuud ORDER BY Ladinakeelne";
            addColumns($db->query($sql));
            break;
        default:
            $sql = "SELECT * from Lehtpuud ORDER BY Ladinakeelne";
            addColumns($db->query($sql));
    }
    
} else {
    $sql = "SELECT * FROM Lehtpuud WHERE Ladinakeelne LIKE '%{$_GET["otsing"]}%' OR Eestikeelne LIKE '%{$_GET["otsing"]}%' OR Sort LIKE '%{$_GET["otsing"]}%' ORDER BY Ladinakeelne";
    addColumns($db->query($sql));
    $sql = "SELECT * FROM Okaspuud WHERE Ladinakeelne LIKE '%{$_GET["otsing"]}%' OR Eestikeelne LIKE '%{$_GET["otsing"]}%' OR Sort LIKE '%{$_GET["otsing"]}%' ORDER BY Ladinakeelne";
    addColumns($db->query($sql));
}

echo "</tbody>";
echo "</table>";

$db->close();

include("footer.php");

function addColumns($ret) {
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['Ladinakeelne'] . "</td>";
        echo "<td>" . $row['Eestikeelne'] . "</td>";
        echo "<td>" . $row['Sort'] . "</td>";
        echo "</tr>";
    }
}
?>