<?php

 class a
 {
 	public $G;
 	
    public function __construct()
	{
		
	}
 	public function say($cc) {
 		printf("我是A类".$cc."---")
 		;
 		return $this;
 		
 	}
 	
 }

 class b
 {
 	public $h;
 
 	public function __construct(&$h)
 	{
 		$this->h = $h;
 		$this->G=$this->h->say('99');
 		
 		var_dump($this);
 		printf("hehe");
 		var_dump($this->G);
 	}
 	public function say($cc) {
 		printf("我是B类".$cc."---")
 		
 		;
 			
 	}
 
 }
 /*
 class C
 {
 	public $H;
 
 	public function __construct(&$h)
 	{
 		$this->H = $h;
 	}
 	public function say($cc) {
 		printf("我是h类".$cc."---")
 		;
 
 	}
 
 }
 */
 header("Content-Type: text/html; charset=utf-8");//utf-8
 $ff=new a();
 $mm=new b($ff);

 
 
 
 
 
 
 