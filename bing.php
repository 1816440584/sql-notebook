<?php
$str = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');   // ��bing��ȡ����
 
if(preg_match('/<url>([^<]+)<\/url>/isU', $str, $matches)) { // ����ƥ��ץȡͼƬurl
    $imgurl = 'http://cn.bing.com'.$matches[1];
} else {  // �������ĳЩԭ��ûץȡ��ͼƬ��ַ
    $imgurl = 'http://img.infinitynewtab.com/InfinityWallpaper/2_14.jpg'; // ʹ��Ĭ�ϵ�ͼ��(Ĭ��ͼ�����ӿ��޸�Ϊ�Լ���)
}
 
header("Location: {$imgurl}");    // ��ת��Ŀ��ͼ��