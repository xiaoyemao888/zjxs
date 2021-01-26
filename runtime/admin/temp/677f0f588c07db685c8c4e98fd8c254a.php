<?php /*a:5:{s:60:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\auth\rule\edit.html";i:1607568254;s:60:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\layout\default.html";i:1607568254;s:57:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\common\meta.html";i:1607568254;s:59:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\auth\rule\tpl.html";i:1611365240;s:59:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\common\script.html";i:1607568254;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo htmlentities($config['language']); ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico"/>
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo app('request')->env('app_debug')?'':'.min'; ?>.css?v=<?php echo htmlentities(config('site.version')); ?>"
      rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
<script src="/assets/js/html5shiv.js"></script>
<script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>

                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">

                                </ol>
                            </div>
                            <!-- END RIBBON -->

                            <div class="content">
                                <form id="edit-form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">菜单:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_radios('row[ismenu]', ['1'=>__('Yes'), '0'=>__('No')], $row['ismenu']); ?>
            <!--<label for="row[ismenu]-1">-->
            <!--<input id="row[ismenu]-1" checked="checked" name="row[ismenu]" type="radio" value="1"> 是</label>-->
            <!--<label for="row[ismenu]-0"><input id="row[ismenu]-0" name="row[ismenu]" type="radio" value="0"> 否</label>-->
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-xs-12 col-sm-2">父级:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_select('row[pid]', $ruledata, $row['pid'], ['class'=>'form-control', 'required'=>'']); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">规则URL:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="name" name="row[name]" value="<?php echo htmlentities(htmlentities($row['name'])); ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-xs-12 col-sm-2">标题:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="title" name="row[title]" value="<?php echo htmlentities(htmlentities($row['title'])); ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">图标:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group input-groupp-md">
                <input type="text" class="form-control" id="icon" name="row[icon]" value="<?php echo htmlentities($row['icon']); ?>" />
                <a href="javascript:;" class="btn-search-icon input-group-addon">搜索图标</a>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-xs-12 col-sm-2">权重:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="weigh" name="row[weigh]" value="<?php echo htmlentities($row['weigh']); ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">规则条件:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea class="form-control" id="condition" name="row[condition]"><?php echo htmlentities(htmlentities($row['condition'])); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="remark" class="control-label col-xs-12 col-sm-2">备注:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea class="form-control" id="remark" name="row[remark]"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-xs-12 col-sm-2">状态:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_radios('row[status]', ['normal'=>__('Normal'), 'hidden'=>__('Hidden')], $row['status']); ?>
            <!--<label for="row[status]-normal">-->
            <!--<input id="row[status]-normal" checked="checked" name="row[status]" type="radio" value="normal"> 正常-->
            <!--</label>-->
            <!--<label for="row[status]-hidden">-->
            <!--<input id="row[status]-hidden" name="row[status]" type="radio" value="hidden"> 隐藏-->
            <!--</label>-->
        </div>
    </div>
    <div class="form-group hidden layer-footer">
        <div class="col-xs-2"></div>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled">确定</button>
            <button type="reset" class="btn btn-default btn-embossed">重置</button>
        </div>
    </div>
</form>
<style>
    #chooseicon {
        margin:10px;
    }
    #chooseicon ul {
        margin:5px 0 0 0;
    }
    #chooseicon ul li{
        width:41px;height:42px;
        line-height:42px;
        border:1px solid #efefef;
        padding:1px;
        margin:1px;
        text-align: center;
        font-size:18px;
    }
    #chooseicon ul li:hover{
        border:1px solid #2c3e50;
        cursor:pointer;
    }
</style>
<script id="chooseicontpl" type="text/html">
    <div id="chooseicon">
        <div>
            <form onsubmit="return false;">
                <div class="input-group input-groupp-md">
                    <div class="input-group-addon"><?php echo __('Search icon'); ?></div>
                    <input class="js-icon-search form-control" type="text" placeholder="">
                </div>
            </form>
        </div>
        <div>
            <ul class="list-inline">
                <% for(var i=0; i<iconlist.length; i++){ %>
                    <li data-font="<%=iconlist[i]%>" data-toggle="tooltip" title="<%=iconlist[i]%>">
                    <i class="fa fa-<%=iconlist[i]%>"></i>
                </li>
                <% } %>
            </ul>
        </div>

    </div>
</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo app('request')->env('app_debug')?'':'.min'; ?>.js"
        data-main="/assets/js/require-backend<?php echo app('request')->env('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>

    </body>
</html>