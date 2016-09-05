<?php
	class Rss{
		private $url;
		private $titles;
		private $links;
		private $descriptions;
		public function __construct($url_){
			$this->url = $url_;
		}
		public function parse_feed(){
			$feed = file_get_contents($this->url);
			$p = xml_parser_create();
			xml_parse_into_struct($p, $feed, $vals, $index);
			$i = 0;
			foreach ($vals as $val){
				if(!strcmp('TITLE', $val['tag'])){
					$this->titles[$i] = $val['value'];
				}
				else if(!strcmp('LINK', $val['tag'])){
					$this->links[$i] = $val['value'];
				}
				else if(!strcmp('DESCRIPTION', $val['tag'])){
					$this->descriptions[$i] = $val['value'];
					$i++;	// incremented here because description will notify me that
							// it has gone through the other two and is time to increment
				}
			}
		}
		public function getTitles(){return $this->titles;}
		public function getDescriptions(){return $this->descriptions;}
		public function getLinks(){return $this->links;}
	}	
?>