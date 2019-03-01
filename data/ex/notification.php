<?php
class Notification{
	private $url;
	private $token;
	private $link;

	private $data;
	
	function __construct(){
         
	}
 
	public function setUrl($url){
		$this->url = $url;
	}
 
	public function setToken($token){
		$this->token = $token;
	}
 
	public function setLink($link){
		$this->link = $link;
	}

	public function setPayload($data){
		$this->data = $data;
	}
	
	public function getNotificatin(){
		$notification = array();
		$notification['token'] = $this->token;
		$notification['link'] = $this->link;
		return $notification;
	}
}
?>