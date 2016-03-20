<div class="container main">
    <div class="row">
        <div class="padding col-md-12 col-xs-12">
            <section class="super-top">
                <article>
                    <a class="super-top__link" href="<?php echo base_url('footballnews/showevent/'.$big_event['chpu']); ?>">
                    <section class="super-top__img super-top__img-bg" style="background-image:url(<?php echo base_url();?>assets/big_event_bg/<?php echo $big_event['bg']; ?>)"></section>
                    <div class="non_padding super-top__text-block-wrapper col-xs-11 col-md-5 col-sm-8">
                        <div class="super-top__text-block-overflow">
                            <div class="super-top__text-block">
                                <div class="main_news_title">
                                     <?php echo $big_event['title']; ?>
                                </div>
                                <div class="main_news_title_bottom"></div> 
                                <h1 class="super-top__title"><?php echo $big_event['subtitle']; ?></h1> 
                                <p class="super-top__text">
                                    <?php echo $big_event['text']; ?>
                                </p> 
                            </div>
                        </div>
                    </div>
                    </a>
                </article>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="non_padding col-md-9">
            <ul class="grid effect-3" id="grid">
                <?php foreach ($news as $news_item): ?>
                <li>
                    <div class="non_padding col-md-12 col-xs-12 grid-item">
                        <a href="<?php echo base_url('footballnews/'.$news_item['chpu']); ?>">
                        <div class="non_padding col-md-12 col-xs-12 text-justify post">
                            <div class="non_padding col-xs-3 text-center"> 
                                <div class="day">
                                    <?php
                                        $date_post = new DateTime($news_item['date']);
                                        echo $date_post->format('d');
                                    ?>
                                </div>
                                <div class="month">
                                    <?php
                                        echo $date_post->format('F Y');
                                    ?>
                                </div>
                                <div class="post-views-text">
                                    <div class="post-views">
                                        <?php echo $news_item['rate']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="non_padding col-xs-9">
                                <section class="post-image" style="background-image:url(<?php echo base_url();?>assets/img_posts/<?php echo $news_item['img_url']; ?>)"></section>
                                <span class="cat-badge">
                                    <?php echo $news_item['subtitle']; ?>                                   
                                </span>
                                <div class="post_content">
                                    <h3 class="title"><?php echo $news_item['title'];?></h3>
                                    <p><?php echo $news_item['small_description']; ?></p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div> 
                </li> 
                <?php endforeach; ?>
            </ul>
        </div>
        
<!--         <div class="non_padding col-md-12">
            <div class="table_tour">
                <span class="title">Таблица турнира</span>
                <div class="title_bottom"></div>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Команда</th>
                <th class="text-center">Победы</th>
                <th class="text-center">Очки</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Carter</td>
                <td>@mail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>p@mail.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>John</td>
                <td>Rambo</td>
                <td>jo@mail.com</td>
            </tr>
        </tbody>
    </table>
            </div>
        </div> -->
 