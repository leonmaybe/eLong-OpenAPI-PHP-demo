<?php

/*
 * DES AES  对称加密
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Xcrypt{
    static function encrypt($str, $key) {
        $size = mcrypt_get_block_size(MCRYPT_DES, MCRYPT_MODE_CBC);
        $str = self::pkcs5Pad($str, $size);
		$bin = mcrypt_cbc(MCRYPT_DES, $key, $str, MCRYPT_ENCRYPT, $key);
        return bin2hex($bin);
    }

   static function decrypt($str, $key) {
        $strBin =self::hex2bin($str);
        $str = mcrypt_cbc(MCRYPT_DES, $key, $strBin, MCRYPT_DECRYPT, $key);
        $str = self::pkcs5Unpad($str);
        return $str;
    }
	
   static function hex2bin($data){
        $bin    = "";
        $i      = 0;
        do {
            $bin    .= chr(hexdec($data{$i}.$data{($i + 1)}));
            $i      += 2;
        } while ($i < strlen($data));

        return $bin;
    }
	
  static  function pkcs5Unpad($text) {
        $pad = ord($text{strlen($text) - 1});
        if ($pad > strlen($text)) return false;
        if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) return false;
        return substr($text, 0, -1 * $pad);
    }

    
  static  function pkcs5Pad($text, $blocksize) {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

}