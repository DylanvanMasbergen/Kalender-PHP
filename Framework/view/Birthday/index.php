<h1>Kalender</h1>


<ul>

<?php 

$month = array("Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December");

$lastMonth = '';
$lastDay = '';

foreach($Birthday as $Birthday) {

    if ($lastMonth != $Birthday['month']) {
        echo '<ul>';
        echo '<h1>' . $month[$Birthday['month']-1] .'</h1>';
        echo '</ul>';

    }

    if ($lastDay != $Birthday['day']) {
        echo '<ul>';
        echo '<h2>' . $Birthday['day'] .'</h2>';
        echo '</ul>';

    }
?>
    <a href= "<?= URL?>birthday/edit/<?=$Birthday['id'];?>">
        <ul>
            <?=$Birthday["person"];?>
            <a href="<?= URL?>birthday/delete/<?= $Birthday['id'] ?>"onclick= "return confirm ('Weetje het zeker dat je het verjaardag wilt verwijderen');">x</a>
        </ul>
    </a>
    <br>

<?php  

    $lastMonth = $Birthday['month'];
    $lastDay = $Birthday['day'];
    }
 ?>
<a href=" <?= URL ?>birthday/create">Toevoegen</a>

</ul>
