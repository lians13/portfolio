<section class="wrap">
    <?php include_once './assets/pages/header.php'?>

    <?php if($_GET['category'] == 'portfolio'):?>
        <?php
            $datas = get_publish_work(); 
            $work = null;
        ?>
        <div class="portfolio">   
            <div class="preview">
                <?php if(!empty($datas)):?>
                    <?php foreach($datas as $row):?>
                        <?php
                            $id= $row['id'];
                            $img_id= "{$id}_img" ;$text_id= "{$id}_text" ;
                        ?>
                        <div class="work" id="<?php echo $id;?>">
                            <div><img class="work_img" src="<?php echo $row['preview_path'];?>"/></div>
                            <div id="<?php echo $img_id;?>" style = "display:none"> <img class="work_img" src="<?php echo $row['image_path'];?>" loading="lazy"></div>
                            <div class="work_text" id="<?php echo $text_id;?>">
                                <div class="work_name">
                                    <?php echo $row['title'];?>
                                    <?php if(!empty( $row['link'])):?>
                                        <a class="work_link" href="<?php echo $row['link'];?>"target="_blank">前往</a>
                                    <?php endif?>
                                </div>
                                <div class="work_describe">
                                    <?php echo $row['content'];?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                <?php endif?>
            </div>
            <div class="float_info">
                <div class="info_img"></div>
                <div class="info_text"></div>
            </div>
        </div>
    <?php else:?>
        <?php $datas = get_publish_data($_GET['category']); ?>
        <?php if(!empty($datas)):?>
            <div class="pack">
                <div class="container">
                    <?php include_once './assets/pages/content.php'?>
                </div>
                <div>
                    <?php include_once './assets/pages/note.php'?>
                </div>
            </div>
            <div style="flex-grow: 1; min-height: 10em;"></div>
        <?php else:?>
            <div style=" display:flex;justify-content: center;align-items: center;flex-grow: 1;">
                <p style="font-size: 3em;">
                    Oops! Here is no file.<br>
                    Back to <a href="./" style="text-decoration:none">Front page</a>
                </p>
            </div>
        <?php endif;?>
    <?php endif?>
    
    <?php include_once './assets/pages/footer.php'?>
</section>