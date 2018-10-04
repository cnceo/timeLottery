﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php
    if ($this->type) {
        $row = $this->getRow("select enable,title from {$this->prename}type where id={$this->type}");
        if (!$row['enable']) {
            echo $row['title'] . '已经关闭';
            exit;
        }
    } else {
        $this->type = 1;
        $this->groupId = 2;
        $this->played = 10;
    }
    ?>
    <script type="text/javascript">
      var game = {
          type:<?=json_encode($this->type)?>,
          played:<?=json_encode($this->played)?>,
          groupId:<?=json_encode($this->groupId)?>
        },
        user = "<?=$this->user['username']?>",
        aflag =<?=json_encode($this->user['admin'] == 1)?>;
    </script>
    <?php $this->display('inc_skin.php', 0, '首页'); ?>
    <link href="/skin/main/skins.css" rel="stylesheet" type="text/css"/>
    <script src="/skin/main/selected.js" charset="utf-8"></script>
    <script type="text/javascript" src="/skin/main/game.js"></script>
    <link type="text/css" rel="stylesheet" href="/skin/css/hklhc.css"/>
    <script type="text/javascript" src="/skin/js/hklhc.js"></script>
    <script type="text/javascript" src="/skin/main/jquery.cookie.js"></script>
</head>

<body>
<?php $this->display('index/inc_user.php'); ?>
<div class="g_44">
    <div id="mainbody">
        <div class="warp lotteryBox">
            <!-- 开奖信息 -->
            <?php $this->display('index/inc_data_current.php'); ?>
            <!-- 开奖信息 end -->
            <div class="game">
                <?php
                if ($this->type == 34 || $this->type == 77) { //六合彩
                    $this->display('index/inc_game_lhc.php');
                } else if (in_array($this->type, array(80, 83))) { //28蛋蛋
                    $this->display('index/inc_game_28dd.php');
                } else {
                    $this->display('index/inc_game.php');
                }
                ?>
            </div>
            <?php if ($this->settings['switchDLBuy'] == 0) { //代理不能买单?>
                <input name="wjdl" type="hidden" value="<?= $this->ifs($this->user['type'], 1) ?>" id="wjdl"/>
            <?php } ?>

            <!-- 图片公告 end -->
            <?php
            if (!$_SESSION['pic-gg'] && $this->settings['picGG']) {
                $this->display('index/pic-gg.php');
                $_SESSION['pic-gg'] = $this->settings['picGG'];
            }
            ?>
        </div>
    </div>
    <?php $this->display('inc_footer.php'); ?>
</body>
</html>