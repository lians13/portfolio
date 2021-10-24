<?php if(!empty($datas)):?>
    <?php foreach($datas as $row):?>
        <div class="data">
            <?php if(empty($row['link'])):?>
                <a class="title">
                    <h3><?php echo $row['title']?></h3>
                </a>
            <?php else:?>
                <a class="title" href="<?php echo $row['link']?>" target="_blank">
                    <h3><?php echo $row['title']?></h3>
                </a>
            <?php endif?>
            <div class="text">
                <?php echo $row['content']?>
            </div>
            <?php $subdatas = get_publish_subdata($row['id'])?>
            <?php if(!empty($subdatas)):?>
                <div class="detail">
                    <?php foreach($subdatas as $subrow):?>
                        <div class="data sub">
                            <?php if(empty($subrow['link'])):?>
                                <a class="title">
                                    <h4><?php echo $subrow['title']?></h4>
                                </a>
                            <?php else:?>
                                <a class="title" href="<?php echo $subrow['link']?>" target="_blank">
                                    <h4><?php echo $subrow['title']?></h4>
                                </a>
                            <?php endif?>
                            <?php if(!empty($subrow['content'])):?>
                                <div class="text">
                                    <?php echo $subrow['content']?>
                                </div>
                            <?php endif?>
                        </div>
                    <?php endforeach?>
                </div>
            <?php endif?>
        </div>
    <?php endforeach?>
<?php endif?>