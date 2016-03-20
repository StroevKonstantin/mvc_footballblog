        <div class="non_padding col-md-3">
            <div class="topstake_padding col-md-12 col-sm-6 col-xs-12">
                <div class="topstake has-bg">
                    <div class="bg" style="background-image: url('<?php echo base_url();?>assets/forecast_bg/<?php echo $forecast['bg']; ?>');"></div>
                    <div class="topstake-link">
                        <span class="title"><?php echo $forecast_day; ?></span>
                        <div class="title_bottom"></div>
                        <div class="topstake_content">
                            <div class="info">
                                <div class="circle" style="background-image: url('<?php echo base_url();?>assets/logo/<?php echo $forecast['logo_first']; ?>');"></div>
                                <div class="circle" style="background-image: url('<?php echo base_url();?>assets/logo/<?php echo $forecast['logo_second']; ?>');"></div>
                            </div>
                            <span class="subtitle"><p><?php echo $forecast['teams']; ?></p></span>
                            <span class="tip-title"><p><?php echo $forecast['content']; ?></p></span>
                            <span class="tip-for-count">
                                <p><?php echo $forecast['best_case']; ?></p>                   
                            </span>
                            <!-- <a href="<?php echo base_url('footballnews/get_next_fact'); ?>"> -->
                                <span class="btn_forecast text-center">
                                    <?php echo $another_forecast; ?>         
                                </span>
                            <!-- </a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding col-md-12 col-sm-6 col-xs-12">
                <div class="fact">
                    <span class="title"><?php echo $interesting_fact; ?></span>
                    <div class="title_bottom"></div>
                    <div class="img_fact" style="background-image: url('<?php echo base_url();?>assets/img_posts/<?php echo $fact['url_img_one']; ?>');"></div>
                    <div class="img_bottom"></div>
                    <div class="content text-center">
                        <h3><?php echo $fact['title']; ?></h3> 
                        <?php echo $fact['content']; ?>
                        <span class="btn_fact text-center">
                            <?php echo $another_fact; ?>         
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>