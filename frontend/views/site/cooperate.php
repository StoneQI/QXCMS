  <?php

  /* @var $this yii\web\View */
  /* @var $form yii\bootstrap\ActiveForm */
  /* @var $model \frontend\models\ContactForm */
  use yii\helpers\Url;


  $this->title = $parsent_column['name'];

  ?>
  <div id="contents">
          <div class="clearfix">
              <div class="main">

                <div class="section">
                      <ul class="practices">
                        <?php
                        if ($posts) {
                             foreach ($posts as $key => $value) {


                          ?>
                          <li class="frame5">
  						<a href="<?=Url::toRoute(['site/post', 'id' => $value->id]); ?>" class="box"><img src="<?= $value->post_image?>" height="198" width="265"><span><?= $value->post_tiltle?></span></a>
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
