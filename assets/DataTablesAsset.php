<?php
namespace app\assets;

use yii\web\AssetBundle;

class DataTablesAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $js = [
        'js/plugin/datatables/jquery.dataTables.min.js',
		'js/plugin/datatables/dataTables.colVis.min.js',
		'js/plugin/datatables/dataTables.tableTools.min.js',
		'js/plugin/datatables/dataTables.bootstrap.min.js',
		'js/plugin/datatable-responsive/datatables.responsive.min.js',
    ];
    public $depends = [

    ];
}
