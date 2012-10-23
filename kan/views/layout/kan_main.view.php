<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/styles/kan/css/globe.css" />
<link rel="stylesheet" type="text/css" href="/styles/kan/css/kan.css" />
<script type="text/javascript"  src="/styles/kan/js/jquery.min.js" ></script>
<title><?php if(isset($title)) echo $title;?></title>
<meta name="keywords" content="<?php if(isset($keywords)) echo $keywords;?>" />
<meta name="description" content="<?php if(isset($description)) echo $description;?>" />
</head>
<body>
<?php $this->controller("site",'index','header');?>
<?php echo $content;?>


<div id="footer">
	<a target="_blank" href="#">关于我们</a>|
	<a target="_blank" href="#">意见反馈</a>| <a target="_blank" href="#">免责声明</a>
	<span>Copyright &copy; 2012 .com. All Rights Reserved. </span> 
	<em><a href="#" target="_blank">京ICP备11002035号</a></em>
</div>
<div style="display:none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F252cac332415da763f6f7bfffdf7c3dd' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21332676-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
