<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
use yii\helpers\Url;
$this->title = $parsent_column['name'];

?>
<div id="contents">
        <div class="clearfix">
            <div class="sidebar">
                <div>
                    <h2>栏目详情</h2>
                    <ul>

                  <?php
                    foreach ($column as $key => $value) {
                      ?>
                      <li>
                      <?php if ($value['column_link']){ ?>
                        <a href="<?=$value['column_link']; ?>" target= _blank><?= $value['name'];?></a>
                      <?php }else{ ?>
                        <a href="<?=Url::toRoute(['site/column', 'id' => $parsent_column['id'],'pid'=>$value['id']]); ?>"><?= $value['name'];?></a>
                      </li>
                      <?php
                      }
                    }
                    ?>
                    </ul>
                </div>

            </div>
            <div class="main">

              <div class="section">
                    <ul>
                      <?php
                      if ($posts) {
                           foreach ($posts as $key => $value) {


                        ?>
                        <li>
                            <div class="frame4">
                                <div class="box">
                                    <img src="<?= $value->post_image?>" alt="Img" height="94" width="90">
                                </div>
                            </div>
                            <p class="list_post_content">
                              <?php if ($value->post_link): ?>
                                <a href="<?=$value->post_link;?>"  target= _blank >
                              <?php else: ?>
                                <a href="<?=Url::to(['site/post', 'id' => $value->id]); ?>" >
                              <?php endif ?>

                           <b><?= $value->post_tiltle?></b></a>
                                <?= $value->post_summarize?>
                            </p>
                        </li>

                        <?php
                      }
                  }else{
                    echo "该栏目下无文章";
                  }

                      ?>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
