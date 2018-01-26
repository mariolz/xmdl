<?php
/**
 * @author mario
 * 根据ip获取国家信息
 * @param string $ip
 */
function getInfoByIp($ip) {
    $ip = @file_get_contents("http://ip.taobao.com/service/getIpInfo.php?ip=".$ip);
    return json_decode($ip,true);
}
function getIp() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
