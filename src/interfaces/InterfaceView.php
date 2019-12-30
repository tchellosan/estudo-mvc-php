<?php 
namespace Src\Interfaces;

interface InterfaceView {
	public function getDir();
	public function setDir($dir);
	public function getTitle();
	public function setTitle($title);
	public function getDescription();
	public function setDescription($description);
	public function getKeywords();
	public function setKeywords($keywords);
	public function renderLayout();
	public function addHead();
	public function addHeader();
	public function addMain();
	public function addFooter();
}