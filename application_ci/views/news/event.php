<div class="container">
	<div class="row">
        <div class="padding col-md-9">
        	
        	<div class="padding_big white_bg">
			<div class="post-views-text">
          <!--   <p>Просмотров:
                 	<?php echo $news_item['rate']; ?>                                                         
            </p> --> 
            
            <p>Дата публикации:
            <?php
                $date_post = new DateTime($news_item['date']);
                echo $date_post->format('d F Y');
            ?></p>
            <p>Источник:
            <?php echo $news_item['source']; ?>
			<?php echo '<h2>'.$news_item['title'].'</h2>';?>
			</p>
			<h3><?php echo $news_item['text']; ?></h3>

<div class="line"></div>
			
			<img class="photo__pic" src="<?php echo base_url();?>assets/big_event_bg/<?php echo $news_item['bg']; ?>">
			
			
			<?php echo $news_item['article']; ?>

			</div>
		</div>
</div>