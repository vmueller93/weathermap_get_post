<?php
/**
 * Created by PhpStorm.
 * User: shinkendo
 * Date: 31.05.14
 * Time: 14:10
 */



// Pseudo daten vom parsedata,php übernommen if empty parsdata startet generate csvautomatisch post methode zurückgeliefert
if($_POST !== NULL) {
    $csvdata = $_POST;
}
$csvdata = array(
    'date' => array(
        '2014-05-01',
        '2014-05-02',
        '2014-05-03',
        '2014-05-04',
        '2014-05-05',
        '2014-05-06',
        '2014-05-07',

    )
);
if($_GET !== null) {
    $date = $_GET["date"];
    $layer = $_GET["layer"];
} else {
    $date = "2014-05-01";
    $layer = "rain";
}

?>
<html>
<head>

</head>
<body>
<ul>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%s&layer%s=">heute</a>',$csvdata['date'][0],$layer));
        ?>
    </li>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%s&layer%s=">morgen</a>',$csvdata['date'][1],$layer));
        ?>
    </li>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$csvdata['date'][2],$layer));
        ?>
    </li>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$csvdata['date'][3],$layer));
        ?>
    </li>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$csvdata['date'][4],$layer));
        ?>
    </li>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$csvdata['date'][5],$layer));
        ?>
    </li>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">%1$s</a>',$csvdata['date'][6],$layer));
        ?>
    </li>
</ul>
<ul>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">Niederschlag</a>', $date , 'rain'));
        ?>
    </li>
</ul>
<ul>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">Wind</a>', $date , 'wind'));
        ?>
    </li>
</ul>
<ul>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">Temperatur</a>', $date , 'temperature'));
        ?>
    </li>
</ul>
<ul>
    <li>
        <?php
        echo(sprintf('<a href="index.php?date=%1$s&layer=%2$s">Pollen Belastung</a>', $date , 'pollen'));
        ?>
    </li>
</ul>
<a href="parseData.php">Neue Daten Laden oder File Einlesen</a>

<h3>Bild zum anzeigen</h3>
<?php
echo (sprintf('bild tag mit volgender url: map_%s_%s',$date,$layer ));
?>
</body>
</html>
