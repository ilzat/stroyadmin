<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\web\YiiAsset;
use app\assets\AppAsset;

use yii\helpers\Html;
use yii\helpers\Url;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

use yii\widgets\Breadcrumbs;

YiiAsset::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= $this->title ?></title>
    <?php
    $this->registerMetaTag(["name" => "viewport", "content" => "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"]);
    $this->registerLinkTag(["rel" => "shortcut icon", "href" => "img/favicon/favicon.ico", "type" => "image/x-icon"]);
    $this->registerLinkTag(["rel" => "icon", "href" => "img/favicon/favicon.ico", "type" => "image/x-icon"]);
    $this->registerLinkTag(["rel" => "apple-touch-icon", "href" => "img/splash/sptouch-icon-iphone.png"]);
    $this->registerLinkTag(["rel" => "apple-touch-icon", "href" => "img/splash/touch-icon-ipad.png", "sizes" => "76x76"]);
    $this->registerLinkTag(["rel" => "apple-touch-icon", "href" => "img/splash/touch-icon-iphone-retina.png", "sizes" => "120x120"]);
    $this->registerLinkTag(["rel" => "apple-touch-icon", "href" => "img/splash/touch-icon-ipad-retina.png", "sizes" => "152x152"]);
    $this->registerMetaTag(["name" => "apple-mobile-web-app-capable", "content" => "yes"]);
    $this->registerMetaTag(["name" => "apple-mobile-web-app-status-bar-style", "content" => "black"]);
    $this->registerLinkTag(["rel" => "apple-touch-startup-image", "href" => "img/splash/ipad-landscape.png", "media" => "screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)"]);
    $this->registerLinkTag(["rel" => "apple-touch-startup-image", "href" => "img/splash/ipad-portrait.png", "media" => "screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)"]);
    $this->registerLinkTag(["rel" => "apple-touch-startup-image", "href" => "img/splash/iphone.png", "media" => "screen and (max-device-width: 320px)"]); ?>
    <?=Html::csrfMetaTags();?>
    <?php $this->head(); ?>
</head>

<body class="menu-on-top">
<?php $this->beginBody() ?>

<!-- #HEADER -->
<header id="header">
    <div id="logo-group">
        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="<?=Url::home()?>img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->
    </div>

    <!-- #TOGGLE LAYOUT BUTTONS -->
    <!-- pulled right: nav area -->
    <div class="pull-right">
        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="<?=Url::home()?>img/avatars/sunny.png" alt="John Doe" class="online" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- #SEARCH -->
        <!-- input: search field -->
        <form action="search.html" class="header-search pull-right">
            <input id="search-fld" type="text" name="param" placeholder="Find reports and more">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
        </form>
        <!-- end input: search field -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- #NAVIGATION -->
<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="<?=Url::home()?>img/avatars/sunny.png" alt="me" class="online" />
						<span>
							john.doe
						</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

				</span>
    </div>
    <!-- end user info -->

    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li>
                <a href="<?= Url::home()?>" title="Главная"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Главная</span></a>
            </li>
            <li>
                <a href="<?= Url::toRoute('/categories/list/index')?>" title="Категории"><i class="fa fa-lg fa-fw fa-sitemap"></i> <span class="menu-item-parent">Категории</span></a>
                <ul>
                    <li>
                        <a href="<?= Url::toRoute('/categories/add/index')?>" title="Создать категорию"><i class="fa fa-lg fa-fw fa-file-o"></i> Создать категорию</a>
                    </li>
                    <li class="">
                </ul>
            </li>
            <li>
                <a href="<?= Url::toRoute('objects/index')?>" title="Объекты"><i class="fa fa-lg fa-fw fa-building-o"></i> <span class="menu-item-parent">Объекты</span></a>
            </li>
            <li>
                <a href="<?= Url::toRoute('projects/index')?>" title="Проекты"><i class="fa fa-lg fa-fw fa-folder-o"></i> <span class="menu-item-parent">Проекты</span></a>
            </li>
            <li>
                <a href="<?= Url::toRoute('groups/index')?>" title="Группы"><i class="fa fa-lg fa-fw fa-share-alt"></i> <span class="menu-item-parent">Группы</span></a>
            </li>
            <li>
                <a href="<?= Url::toRoute('marks/index')?>" title="Марки"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Марки</span></a>
            </li>
            <li>
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-filter"></i> <span class="menu-item-parent">Выборки</span></a>
            </li>
            <li>
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">Заявки</span></a>
            </li>

        </ul>
    </nav>


			<span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

        <!-- breadcrumb -->
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'tag' => 'ol',
            ]) ?>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->


    <!-- MAIN CONTENT -->
    <div id="content">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">

                    <!-- PAGE HEADER -->
                    <i class="fa-fw fa <?=  isset($this->params['page_icon'])  ? $this->params['page_icon'] : 'fa-file-text-o' ?>"></i>
                    <?=  isset($this->params['page_title'])  ? $this->params['page_title'] : 'NoTitle' ?>
							<span>
								 <?=  isset($this->params['page_subtitle'])  ? $this->params['page_subtitle'] : 'NoSubTitle' ?>
							</span>
                </h1>
            </div>
            <!-- end col -->

            <!-- BUTTONS -->
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8" style="text-align: right; margin-top: 10px;">
                <?=  isset($this->params['page_buttons'])  ? $this->params['page_buttons'] : '' ?>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

        <!--
            The ID "widget-grid" will start to initialize all widgets below
            You do not need to use widgets if you dont want to. Simply remove
            the <section></section> and you can use wells or panels instead
            -->

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <?= $content ?>

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">StroyAdmin<span class="hidden-xs"> - строительные сервисы</span> © 2016</span>
        </div>

        <div class="col-sm-6 text-right hidden-xs">
        </div>
    </div>
</div>
<!-- END PAGE FOOTER -->



<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?=Url::home()?>js/plugin/pace/pace.min.js"></script>






<?php $this->endBody() ?>

<?php
$this->registerJs('pageSetUp();', $this::POS_READY, 'pageSetUp')
?>
</body>

</html>
<?php $this->endPage() ?>