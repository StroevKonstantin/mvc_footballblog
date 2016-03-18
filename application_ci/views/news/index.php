<!-- knkmnlkmlm -->
<div class="container main">

<div class="row">

<div class="col-md-7 col-xs-12">
<?php foreach ($news as $news_item): ?>

		<div class="col-md-12 col-xs-12 text-justify post">
				<div class="col-xs-2 text-center"> 
                    <span class="day">
                    	<?php
                    		$date_post = new DateTime($news_item['date']);
							echo $date_post->format('d');
                    	?>
                    </span>
                    <span class="month">
                    	<?php
                    		echo $date_post->format('F Y');
                    	?>
                    </span>
                </div>
                <div class="col-xs-10 post-content">
                	<section class="post-image" style="background-image:url(<?php echo base_url();?>assets/img_posts/<?php echo $news_item['img_url']; ?>)"></section>
					<h3 class="title"><?php echo $news_item['title'];?></h3>
                	<?php echo $news_item['small_description']; ?>
        			<p>
        				<a href="<?php echo base_url('footballnews/'.$news_item['chpu']); ?>">Подробнее...</a>
        			</p>
        		</div>
		</div>
		
<?php endforeach; ?>
</div>

<div class="col-md-5">

	<div class="col-md-12 text-center">
		<div class="post">
			<div class="title_text">
                <h2>Интересный факт</h2>
            </div>
            <div class="title_text_bottom">
                asdasd<br>
                asdass<br>
                asdasd<br>
                asdasd<br>
                asdasd<br>
            </div>	
		</div>
	</div>

    <div class="col-md-12 text-center">
            <div class="module_fact post">
                <p>Тут будут интересные факты о футболе</p>
            </div>
    </div>

	<div class="col-md-12 text-center">
			<div class="module_fight post">
				<h2 class="title">Битва тура</h2>
				<p>Тут будет отмечена битва тура</p>
				<p>Два изображения</p>
				<p>Кэфы на события</p>
			</div>
	</div>
</div>

</div>
</div>