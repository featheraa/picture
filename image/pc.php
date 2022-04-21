<?php
	$handle = opendir('./'); //当前目录
	while (false !== ($file = readdir($handle))) { //遍历该php教程文件所在目录
		list($filesname,$kzm)=explode(".",$file);//获取扩展名
		if ($kzm=="webp" or $kzm=="jpg") { //文件过滤
			if (!is_dir('./'.$file)) { //文件夹过滤
				$array[]=$file;//把符合条件的文件名存入数组
			}
		}
	}
	$suiji=array_rand($array); //使用array_rand函数从数组中随机抽出一个单元
?>
<img style="-webkit-user-select: none; margin: auto;cursor:zoom-in" src="<?=$array[$suiji]?>" width="1000" height="570">

