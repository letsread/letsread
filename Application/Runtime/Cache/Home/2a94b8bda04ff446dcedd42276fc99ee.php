<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <!--引入文件样例
    <link rel="stylesheet" href="/LSR/LSR/Public/css/文件名.css" >
    <script src="/LSR/LSR/Public/js/文件名.js"></script>
    -->
</head>

<body>

<div>
    <div>
        <div>
            <h1>登录</h1>
        </div>
        <form id="form" name="form" method="post" action="<?php echo U('login');?>"  autocomplete="off">
            <div>
                <input name="username" type="text" placeholder="用户名" >
            </div>
            <div>
                <input name="password" type="password" placeholder="密码">
            </div>
            <button type="submit">登 录</button>
        </form>
    </div>
</div>

</body>
</html>