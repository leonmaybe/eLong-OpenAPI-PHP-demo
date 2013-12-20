<?php
class TopClient
{
	public $appKey;

	public $secretKey;

	public $gatewayUrl = "http://api.elong.com/rest";

	public $format = "xml";
        
        public $user;
        
        /** 是否打开入参check**/
	public $checkRequest = true;

        private $signature=null;
        private $data;
        private $apimethod;
        private $timestamp;


        protected function generateSign()
	{
		return strtolower(md5($this->timestamp.  strtolower(md5($this->data.$this->appKey)).$this->secretKey));
	}
        function request_by_curl($remote_server,$post_string=null,$second=60){
                $ch = curl_init();
                if(strlen($remote_server) > 5 && strtolower(substr($remote_server,0,5)) == "https" ) {
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                }
                curl_setopt($ch,CURLOPT_URL,$remote_server);
                curl_setopt($ch,CURLOPT_POSTFIELDS,$post_string);
                curl_setopt($ch,CURLOPT_TIMEOUT,$second); 
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2');
                $data = curl_exec($ch);
                curl_close($ch);
                return $data;
        }

	public function execute($request, $session = null)
	{
                $this->timestamp=  time();
                $this->data=$this->format=='json'?json_encode($request->getApiParas()):$this->lib_xml_encode($request->getApiParas());
                $this->signature=$this->generateSign();
                $this->apimethod=$request->getApiMethodName();
                $this->gatewayUrl=($request->isHttps()?'https://':'http://').str_replace(array('http://','https://'), '', $this->gatewayUrl);
                $postUrl=$this->gatewayUrl."?format={$this->format}&method={$this->apimethod}&signature={$this->signature}&user={$this->user}&timestamp={$this->timestamp}&data=".urlencode($this->data);
                return $this->request_by_curl($postUrl);
		
	}
       private  function lib_xml_encode($data, $encoding='utf-8', $root="root") {
            $xml = "<?xml version=\"1.0\" encoding=\"$encoding\"?>\n";
            $xml.= "<$root>";
            $xml.=$this->lib_data_to_xml($data);
            $xml.= "</$root>";
            return $xml;
        }
        private function lib_data_to_xml($data) {
            if (is_object($data)) {
                $data = get_object_vars($data);
            }
            $xml = '';
            foreach ($data as $key => $val) {
                if(is_null($val)){
                     $xml .= "<$key/>\n";
                }else{
                    is_numeric($key) && $key = "item";
                    $xml.="<$key>";
                    $xml.= ( is_array($val) || is_object($val)) ? $this->lib_data_to_xml($val) :$val;
                    list($key, ) = explode(' ', $key);
                    $xml.="</$key>";
                }
            }
            return $xml;
        }
}