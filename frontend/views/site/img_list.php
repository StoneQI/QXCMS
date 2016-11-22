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
                      <ul class="practices">
                        <?php
                        if ($posts) { foreach ($posts as $key => $value) {
                          ?>
                          <li class="frame5">
                          <?php if ($value->post_link): ?>
                            <a href="<?=$value->post_link;?>"  target= _blank class="box">
                          <?php else: ?>
                            <a href="<?=Url::toRoute(['site/post', 'id' => $value->id]); ?>" class="box">
                          <?php endif ?>

                            <img src="<?= $value->post_image?>" height="198" width="265"><span><?= $value->post_tiltle?></span></a>
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
