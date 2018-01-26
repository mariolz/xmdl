<?php
/**
 * $redis = new RedisClient;
$redis->connect('/tmp/redis.sock');

$redis->zAdd('msg', <PRIORITY>, <MSGID>);

while ($msg = $redis->zRevPop('msg')) {
    var_dump($msg);
}
 * @author mario
 *
 */
class RedisHelper extends Redis
{
    const POSITION_FIRST = 0;
    const POSITION_LAST = -1;
    private $_encode_method = 'json_encode';
    public function sets($zset,$value) {
        $zset = crc32($zset);
        $data = call_user_func('json_encode',$value);
        var_dump($data);die;
        return $this->zAdd($zset,$data);
    }
    public function zPop($zset)
    {
        $zset = crc32($zset);
        return $this->zsetPop($zset, self::POSITION_FIRST);
    }

    public function zRevPop($zset)
    {
        $zset = crc32($zset);
        return $this->zsetPop($zset, self::POSITION_LAST);
    }

    private function zsetPop($zset, $position)
    {
        $zset = crc32($zset);
        $this->watch($zset);

        $element = $this->zRange($zset, $position, $position);

        if (!isset($element[0])) {
            return false;
        }

        if ($this->multi()->zRem($zset, $element[0])->exec()) {
            return $element[0];
        }

        return $this->zsetPop($zset, $position);
    }
}
