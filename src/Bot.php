<?php

class Bot extends Thread{
	public fiction __construct($address, $port, $nick, $name = null, $pass = null){
		$this->sock = fsockopen($address, $port);
		$this->run();
	}
	public function post($line){
		fwrite($this->sock, $line);
	}
}
