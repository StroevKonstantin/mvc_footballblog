<div class="non_padding col-md-3" >
    <div class="topstake_padding col-md-12 col-sm-6 col-xs-12" id="f">
        <div class="single">
            <ul>
                <?php foreach ($forecast as $forecast_item): ?>
                    <li>
                        <div class="single-box">
                            <div class="topstake has-bg" >
                                <div class="bg" style="background-image: url('<?php echo base_url();?>assets/forecast_bg/<?php echo $forecast_item['bg']; ?>');"></div>
                                <div class="topstake-link">
                                <span class="title"><?php echo $forecast_day; ?></span>
                                <div class="title_bottom"></div>
                                <div class="topstake_content">
                                    <div class="info">
                                        <div class="circle" style="background-image: url('<?php echo base_url();?>assets/logo/<?php echo $forecast_item['logo_first']; ?>');"></div>
                                        <div class="circle" style="background-image: url('<?php echo base_url();?>assets/logo/<?php echo $forecast_item['logo_second']; ?>');"></div>
                                    </div>
                                    <span class="subtitle"><p><?php echo $forecast_item['teams']; ?></p></span>
                                    <span class="tip-title"><p><?php echo $forecast_item['content']; ?></p></span>
                                    <span class="tip-for-count">
                                        <p><?php echo $forecast_item['best_case']; ?></p>                   
                                    </span>
                                </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <a href="#" class="s-next">
            <div class="div_btn_nextforecast">              
                <span class="btn_forecast text-center">
                    <?php echo $another_forecast; ?>         
                </span>                       
            </div>
        </a>


                <!-- <div class="topstake has-bg">
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
                                <span class="btn_forecast text-center" id="btn_forecast">
                                    <?php echo $another_forecast; ?>         
                                </span>
                        </div>
                    </div>
                </div> -->
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
                        <!-- <span class="btn_fact text-center">
                            <?php echo $another_fact; ?>         
                        </span> -->
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>