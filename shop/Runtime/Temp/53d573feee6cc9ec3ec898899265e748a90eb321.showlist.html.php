<?php /*%%SmartyHeaderCode:240775618b505269361-17105199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53d573feee6cc9ec3ec898899265e748a90eb321' => 
    array (
      0 => 'D:/wamp/www/demo/shop/Admin/View\\Goods\\showlist.html',
      1 => 1444444471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240775618b505269361-17105199',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5618b505375a5',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5618b505375a5')) {function content_5618b505375a5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="/demo/shop/public/admin/css/mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
          
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/demo/shop/index.php/admin/Goods/add">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                                        <tr id="product4">
                        <td>1</td>
                        <td><a href="#">iPhone6s</a></td>
                        <td>53</td>
                        <td>4999</td>
                        <td><img src="/demo/shop/public/admin/img/" height="60" width="60"></td>
                        <td><img src="/demo/shop/public/admin/img/" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>0000-00-00 00:00:00</td>
                        <td><a href="/demo/shop/index.php/admin/Goods/update" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr>
                                        <tr id="product4">
                        <td>2</td>
                        <td><a href="#">iPhone6s</a></td>
                        <td>53</td>
                        <td>4999</td>
                        <td><img src="/demo/shop/public/admin/img/" height="60" width="60"></td>
                        <td><img src="/demo/shop/public/admin/img/" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>0000-00-00 00:00:00</td>
                        <td><a href="/demo/shop/index.php/admin/Goods/update" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr>
                                        <tr id="product4">
                        <td>3</td>
                        <td><a href="#">iPhone6s</a></td>
                        <td>53</td>
                        <td>4999</td>
                        <td><img src="/demo/shop/public/admin/img/" height="60" width="60"></td>
                        <td><img src="/demo/shop/public/admin/img/" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>0000-00-00 00:00:00</td>
                        <td><a href="/demo/shop/index.php/admin/Goods/update" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr>
                                        <tr id="product4">
                        <td>4</td>
                        <td><a href="#">iPhone6s</a></td>
                        <td>53</td>
                        <td>4999</td>
                        <td><img src="/demo/shop/public/admin/img/" height="60" width="60"></td>
                        <td><img src="/demo/shop/public/admin/img/" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>0000-00-00 00:00:00</td>
                        <td><a href="/demo/shop/index.php/admin/Goods/update" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr>
                                        <tr id="product4">
                        <td>5</td>
                        <td><a href="#">xiaomi</a></td>
                        <td>0</td>
                        <td>1800</td>
                        <td><img src="/demo/shop/public/admin/img/" height="60" width="60"></td>
                        <td><img src="/demo/shop/public/admin/img/" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>0000-00-00 00:00:00</td>
                        <td><a href="/demo/shop/index.php/admin/Goods/update" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr>
                                        <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>