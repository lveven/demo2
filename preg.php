<?php 
$str = '<ul class="author list-inline"><li><a href="xxx">我养了一只狗</a><span class="split"></span><a href="/q/1010000014324744/a-1020000014363955">1 分钟前回答</a></li><li><a href="xxx">我养了一直猫</a><span class="split"></span><a href="/q/1010000014324744/a-1020000014363955">21 分钟前回答</a></li></ul>';
$str = '<ul class="author list-inline">
    <li>
        <a href="xxx">我养了一只狗</a><span class="split"></span>
        <a href="/q/1010000014324744/a-1020000014363955">1 分钟前回答</a>
    </li>
    <li>
        <a href="xxx">我养了一直猫</a>
        <span class="split"></span>
        <a href="/q/1010000014324744/a-1020000014363955">21 分钟前回答</a>
    </li>
</ul>';
$aa = compress_html($str);

$search = "/<li><a .*?>(.*?)<\/a>/";
preg_match_all($search,$aa,$r);
echo "<pre>";
print_r($r[1]);

function compress_html($string) {  
    $string = str_replace("\r\n", '', $string); //清除换行符  
    $string = str_replace("\n", '', $string); //清除换行符  
    $string = str_replace("\t", '', $string); //清除制表符  
    $pattern = array (  
                    "/> *([^ ]*) *</", //去掉注释标记  
                    "/[\s]+/",  
                    "/<!--[^!]*-->/",  
                    "/\" /",  
                    "/ \"/",  
                    "'/\*[^*]*\*/'"  
                    );  
    $replace = array (  
                    ">\\1<",  
                    " ",  
                    "",  
                    "\"",  
                    "\"",  
                    ""  
                    );  
    return preg_replace($pattern, $replace, $string);  
}