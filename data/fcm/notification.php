<?php
class Notification{
	private $id;
	private $userId;
	private $userName;
	private $videoType;
	private $videoTitle;
	private $videoUrl;
	private $videoId;
	private $videoDuration;
	private $tags;
	private $totalViews;
	private $cid;
	private $categoryName;
	private $ThumbImage;
	private $downloads;
	private $fileSize;
	private $url;
	private $type;
	private $image;
	private $title;
	private $message;
	private $msg;
	
	
	function __construct(){
         
	}
 
	public function setId($id){
		$this->id = $id;
	}
 
	public function setUserId($userId){
		$this->userId = $userId;
	}
 
	public function setUserName($userName){
		$this->userName = $userName;
	}

	public function setVideoType($videoType){
		$this->videoType = $videoType;
	}
 
	public function setVideoTitle($videoTitle){
		$this->videoTitle = $videoTitle;
	}
	public function setVideoUrl($videoUrl){
		$this->videoUrl = $videoUrl;
	}
	public function setVideoId($videoId){
			$this->videoId = $videoId;
	}
	public function setVideoDuration($videoDuration){
			$this->videoDuration = $videoDuration;
	}
	public function setTags($tags){
			$this->tags = $tags;
	}
	public function setTotalViews($totalViews){
			$this->totalViews = $totalViews;
	}
	public function setCid($cid){
			$this->cid = $cid;
	}
	public function setCategoryName($categoryName){
			$this->categoryName = $categoryName;
	}
	public function setThumbImage($ThumbImage){
			$this->ThumbImage = $ThumbImage;
	}
	public function setDownloads($downloads){
			$this->downloads = $downloads;
	}
	public function setFileSize($fileSize){
			$this->fileSize = $fileSize;
	}
	public function setUrl($url){
			$this->url = $url;
	}
	public function setType($type){
			$this->type = $type;
	}
	public function setImage($image){
			$this->image = $image;
	}
	public function setTitle($title){
			$this->title = $title;
	}
	public function setMessage($message){
			$this->message = $message;
	}
	public function setPayload($msg){
		$this->msg = $msg;
	}
	
	
	public function getNotificatin(){
		$notification = array();
		$notification['id'] = $this->id;
		$notification['userId'] = $this->userId;
		$notification['userName'] = $this->userName;
		$notification['videoType'] = $this->videoType;
		$notification['videoTitle'] = $this->videoTitle;
		$notification['videoUrl'] = $this->videoUrl;
		$notification['videoId'] = $this->videoId;
		$notification['image'] = $this->image;
		$notification['videoDuration'] = $this->videoDuration;
		$notification['tags'] = $this->tags;
		$notification['totalViews'] = $this->totalViews;
		$notification['cid'] = $this->cid;
		$notification['categoryName'] = $this->categoryName;
		$notification['ThumbImage'] = $this->ThumbImage;
		$notification['downloads'] = $this->downloads;
		$notification['fileSize'] = $this->fileSize;
		$notification['url'] = $this->url;
		$notification['type'] = $this->type;
		$notification['image'] = $this->image;
		$notification['title'] = $this->title;
		$notification['message'] = $this->message;
		return $notification;
	 	
	}
}
?>