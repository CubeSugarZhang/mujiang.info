<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>木匠手记</title>
<meta name="keywords" content="blog, nodejs, js, 前端, 前端工程师, 前端博客, 开发, 码农, mysql, 架构, 集群, 框架, 木匠, 木酱" />
<meta name="description" content="木匠手记这个木匠目前就职于阿里，专注nodejs开发。这里有一些在前端、后端、架构和边缘技术的一些经验和体会。包括angularjs, nodejs, php, mysql, mongodb, redis, puppet, haproxy...." />
<style>
body{
    font: 12px/18px "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, Verdana, sans-serif;
    font-size: 18px;
    -webkit-font-smoothing: antialiased;
}
div {
    position: relative;
    width: 400px;
    margin: 20% auto 0;
    padding: 20px 0;
    -webkit-box-shadow: 5px 6px 15px 0px rgba(0,0,0,0.40);
    -moz-box-shadow: 5px 6px 15px 0px rgba(0,0,0,0.40);
    box-shadow: 5px 6px 15px 0px rgba(0,0,0,0.40); 
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    transition: margin .5s linear;
    -webkit-transition: margin .5s linear;
    border-radius: 10px;
    overflow: hidden;
}
div:before {
    content: " ";
    position: absolute;
    bottom: 0;
    height: 10px;
    background-color: #f6b580;
    transition: width 3s linear;
    -webkit-transition: width 3s linear;
}
.loaded div:before {
    width: 100%;
}

p { text-align: center; }
a {
    color: #882823;
    font-weight: bold;
    text-decoration: none;
}
a:hover {
    color: #501714;
}

#beian {
    font-size: 12px;
    color: #888;
    position: fixed;
    right: 0;
    bottom: 0;
}

</style>
    <?php include("ga.php"); ?>
</head>

<body>
    <?php 
        $url = "https://github.com/ericdum/mujiang.info/issues/";
        $articles = array(
            "看AngularJS文档需要注意的一些关键点",
            "npm的package.json中文文档",
            "踩到一个MySQL的坑——错误的索引",
            "png8的透明通道（上）",
            "小功能的优化——图片轮播",
            "浏览器阻塞探究",
            "技术需要整理",
        );
        $total = count($articles);

        $title = "木匠手记";
        $domain = implode('.', array_slice(explode('.', $_SERVER['HTTP_HOST']), -2, 2));
        switch( $domain ){
            case "qqyj.org":
                $title = "奇巧淫技研究院";
                break;
            case "deepui.com":
                $title = "DeepUI";
                break;
            case "webengineer.cn":
                $title = "web工程师";
                break;
        }
    ?>
    <div>
        <p><a href="/"><?=$title?></a>正在制作中
        <p>请先访问Github Blog:
            <p><a href="/share/cognitive-share/" title="透过认知心理学来看UI设计">透过认知心理学来看UI设计</a>
        <?php foreach($articles as $i => $title ): ?>
            <p><a href="<?php echo $url?><?php echo $total-$i?>/" title="<?php echo $title?>"><?php echo $title?></a>
        <?php endforeach;?>
    </div>

    <script>
        function resize(){
            var div = document.getElementsByTagName('div')[0];
            div.style.marginTop = (document.body.scrollHeight - div.offsetHeight)*0.4 + "px"
        }
        window.onresize = resize;
        resize();
        //document.body.className = "loaded";
        //setTimeout(function(){location.href = "<?php echo $url?>";}, 3000);
    </script>
        <a id="beian" href="http://www.miitbeian.gov.cn/">沪ICP备13012399号</a>
