<?php

/* @var $this yii\web\View */
use yii\helpers\Html;


$this->title = 'STO Express Bristol';
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Hi <?= Yii::$app->user->identity->username ?>, welcom to STO Bristol!</h2>

        <p class="lead">您可以使用本系统开展下列管理工作：</p>

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Receipt</h2>

                <p>在此处，您可以开具收据，查询以往收据.</p>
                
                <?php echo Html::a('Start Now &raquo;',['receipt/index'],['class'=>'btn btn-primary']); ?>
                <!--<p><a class="btn btn-default" href="192.168.1.81:8080/index.php/site/receipt">Start Now &raquo;</a></p>-->
            </div>
            <div class="col-lg-4">
                <h2>Inventory-Frozen Food</h2>

                <p>在此处管理冰柜冷冻食品库存.</p>
                
                <?php echo Html::a('Start Now &raquo;',['site/frozenfood'],['class'=>'btn btn-primary']); ?>
                <!--<p><a class="btn btn-default" href="/site/frozenfood">Start Now &raquo;</a></p>-->
            </div>
            <div class="col-lg-4">
                <h2>Baby Milk Orders</h2>

                <p>在此处记录奶粉订单详情.</p>
                
                <?php echo Html::a('Start Now &raquo;',['site/babymilk'],['class'=>'btn btn-primary']); ?>
                <!--<p><a class="btn btn-default" href="/site/babymilk">Start Now &raquo;</a></p>-->
            </div>
        </div>

    </div>
</div>
