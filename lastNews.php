<div class="row actu">
        <!--Second row-->
        <!--Heading-->
        <div class="reviews">
            <h2 class="h2-responsive">Dernières news</h2>
        </div>
    <!--First review-->
     <?php while($lastNews=$result->fetchObject()):?>

                        <div class="media">
                            <a class="media-left" href="#">
                                <img class="img-circle" src="img/news/<?= $lastNews->img ?>" alt="image" style="width: 120px">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?=$lastNews->title?> (<?=$lastNews->date?>)</h4>
                                <ul class="rating inline-ul">
                                    <?php for($i = 1; $i<= 5; $i++):?>
                                    <?php if($i<= $lastNews->eval):?>
                                        <li><i class="fa fa-star amber-text"></i></li>
                                    <?php else:?>    
                                            <li><i class="fa fa-star "></i></li>
                                    <?php endif?>       
                                    <?php endfor?>     
                                </ul>
                                <p><?= $cutText->cutString($lastNews->content, $lastNews->id)?>
                            </div>
                        </div>
     <?php endwhile?>

    </div>
