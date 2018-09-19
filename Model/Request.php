<?php
class Request{
	public $reqID;
	public $reqDate;
	public $reqSubject;
	public $reqDesc;

 function __construct($reqID,$reqDate,$reqSubject,$reqDesc){
 	$this->reqID = $reqID;
 	$this->reqDate= $reqDate;
 	$this->reqSubject = $reqSubject;
 	$this->reqDesc = $reqDesc;}
}