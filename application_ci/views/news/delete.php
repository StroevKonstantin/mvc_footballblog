<div class="container">

<h2><?php echo $title; ?></h2>


<?php foreach ($news as $news_item): ?>
                    <div class="non_padding col-md-12 col-xs-12 grid-item">
                        <a href="<?php echo base_url('footballnews/'.$news_item['chpu']); ?>">
                        
                                    <h3 class="title"><?php echo $news_item['title'];?></h3>
                                    <a href="<?php echo base_url('footballnews/removeentry/'.$news_item['chpu']); ?>">Delete</a>

                        </a>
                    </div> 
<?php endforeach; ?>


<br>

</div>