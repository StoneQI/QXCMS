  <?php

  /* @var $this yii\web\View */
  /* @var $form yii\bootstrap\ActiveForm */
  /* @var $model \frontend\models\ContactForm */
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;

  $this->title = $parsent_column['name'];
  $this->params['breadcrumbs'][] = $this->title;
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
                <a href="<?=Url::toRoute(['site/column', 'id' => $parsent_column['id'],'pid'=>$value['id']]); ?>"><?= $value['name']?></a>
              </li>
                      <?php
                    }


                    ?>
                    </ul>
                  </div>
                  <div>
                      <h2>联系方式</h2>
                      <p>
                          &ldquo;The best family lawyers in the city so far. Me and my ex-wife didn’t have any<br> problems settling the terms and agreement. Everything went so smoothly. We’re both very happy.&ldquo; <span>- Jared Greene</span>
                      </p>
                  </div>
              </div>
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
