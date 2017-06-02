<p>Kalender</p>


<ul>


    <?php 
    $month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");


    foreach ($Birthday as $Birthday){
    	if(!array_key_exists($Birthday["month"], $month)){
    		$month[$Birthday["month"]] = array();
    	}?>




    <h1><ul><?=$month[$Birthday["month"]-1];?></ul></h1>
    <h2><ul><?=$Birthday["day"];?></ul></h2>
    <a href= "birthday/edit/<?= $Birthday['id'];?>"><ul><?=$Birthday["person"];?></a> <a href="delete">x</a></ul></a><br>
    
  

    <?php }?>


<a href=" <?= URL ?>birthday/create">Toevoegen</a>

</ul>



