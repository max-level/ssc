<?php
/**
* @author ben
* @date 2017-10-27
*/
class pay {
	private $param = array();
	public static function Sign($param, $key) {
		$string = '';
		foreach($param as $k => $value) {
			$string .= $k . '=' . $value . '&';
		}
		$string = rtrim($string, '&');
		// echo $string . $key;echo '<br>';
		// echo md5($string . $key);echo '<br>';
		return md5($string . $key);
	}

	/**
     * 发送curl-post请求
     * @author Ben
     * @date 2017-10-27
     * @param $aPostData
     * @param $respondType 1 xml 2 json
     * @param $timeout
     * @return array
     */
    public static function curlPost($aPostData, $sUrl, $respondType = 1, $timeout = 5) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $sUrl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($aPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, (int)$timeout);
        curl_setopt($ch, CURLOPT_USERAGENT,
            'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.47 Safari/536.11');// 添加浏览器内核信息，解决403问题 add by ben 2017/10/25

        $response = curl_exec($ch);

        if (1 === $respondType) {
            $res = $this->xmlToArray($response);
        } elseif (2 === $respondType) {
        	// echo $response;echo '<br>';
            $res = json_decode($response, true);
            // 如果没有decode成功，也许是因为三方用的是GB2312
            if (is_null($res)) {
                $res = json_decode(iconv('GB2312', 'UTF-8', $response), true);
            }
        } else {
            $res = $response;
        }
        curl_close($ch);

        return $res;
    }

    /**
     * 发送curl-get请求
     * @author Ben
     * @date 2017-07-31
     * @param $aData
     * @param $sUrl
     * @param $respondType 1 xml 2 json
     * @param $timeout
     * @return array
     */
    public static function curlGet($aData, $sUrl, $respondType = 1, $timeout = 5) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $sUrl . '?' . http_build_query($aData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, (int)$timeout);
        curl_setopt($ch, CURLOPT_USERAGENT,
            'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.47 Safari/536.11');// 添加浏览器内核信息，解决403问题 add by ben 2017/10/25
        $response = curl_exec($ch);
        if (1 === $respondType) {
            $res = $this->xmlToArray($response);
        } elseif (2 === $respondType) {
            $res = json_decode($response, true);
            // 如果没有decode成功，也许是因为三方用的是GB2312
            if (is_null($res)) {
                $res = json_decode(iconv('GB2312', 'UTF-8', $response), true);
            }
        } else {
            $res = $response;
        }
        curl_close($ch);

        return $res;
    }
}
