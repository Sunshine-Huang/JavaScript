<?php


/**
     * 生成随机数字验证码
     *
     * @param int $size 验证码长度
     *
     * @return string
     */
    function generateRandNumberVerificationCode($size = 4)
    {
        if($size <= 0 || empty($size) || !isset($size))
        {
            $size = 4;
        }
 
        //验证码内容
        $code_array = array(
            0,1,2,3,4,5,6,7,8,9
        );
 
        $random_keys = array();
        for($i = 0; $i < $size; $i++)
        {
            $keys = array_rand($code_array,1);
 
            array_push($random_keys,$code_array[$keys]);
        }
 
        //数组转成字符串
        $verification_code = implode('',$random_keys);
 
        return $verification_code;
 
    }


/**
     * 生成随机数字验证码图片
     *
     * @param string $code 验证码内容
     *
     * @param string $member_id 会员id
     *
     * @param string $width 图片宽度
     *
     * @param string $height 图片宽度
     *
     * @return string
     */
    function generateRandNumberVerificationCodeImg($code = '',$member_id = '',$width = 80,$height = 40)
    {
        if(empty($code) || !isset($code))
        {
            return false;
        }
        if(empty($member_id) || !isset($member_id))
        {
            return false;
        }
 
        //判断文件夹是否存在，不存在则创建
        $dir = ROOT_PATH.'/upload/verification_code_img';
        if(!is_dir($dir)){
            mkdir($dir, 0777, true);
        }
 
        //验证码图片保存路径，文件名称
        $file_name = ROOT_PATH.'/upload/verification_code_img/member_id_'.$member_id.'.png';
        //域名返回
        $domain_name = _constant_url.'/upload/verification_code_img/member_id_'.$member_id.'.png';
 
        $img = imagecreatetruecolor($width, $height);
        $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
        $green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
        $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
        imagefill($img,0,0,$white);
 
        imagestring($img, 5, 22, 12, $code, $black);
        //加入噪点干扰
        for($i=0;$i<100;$i++) {
            imagesetpixel($img, rand(0, $width) , rand(0, $width) , $black);  //imagesetpixel — 画一个单一像素，语法: bool imagesetpixel ( resource $image , int $x , int $y , int $color )
            imagesetpixel($img, rand(0, $width) , rand(0, $width) , $green);
        }
 
        //输出验证码
//        header("content-type: image/png");
        imagepng($img,$file_name);  //保存图片
        imagedestroy($img);  //图像处理完成后，使用 imagedestroy() 指令销毁图像资源以释放内存，虽然该函数不是必须的，但使用它是一个好习惯。
 
        return $domain_name;
    }


    //生成验证码字符串
    $cc = generateRandNumberVerificationCode(4);

    //把字符串加入噪音，生成图片，然后保存到站点内
    generateRandNumberVerificationCodeImg($cc,99);

    echo  date('y-M-d H:i:s'). "生成验证码图片成功";


?>