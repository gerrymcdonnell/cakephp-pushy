<?php
/**
	https://www.christopheryee.ca/pushy/
	
	Cakephp 3 port by gerry mc donnell
**/

namespace Gerrymcdonnell\Pushy\View\Helper;
use Cake\View\Helper;

class PushyHelper extends Helper{
	
	var $helpers = array('Html');

	public function initialize(array $config){
        //debug($config);		
		//echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'); 
		//echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js');
		//echo $this->Html->css('Pushy.pushy');
		//echo $this->Html->script('Pushy.pushy.min');	
    }	
	

	public function addMenuButton($text){
		echo '<!-- Pushy Menu Button -->';
        echo'<div class="menu-btn">&#9776; '.$text.'</div>';
        echo '<!-- Site Overlay -->';
        echo '<div class="site-overlay"></div>';
	}




	//<li class="pushy-link"><a href="#">Item 1</a></li>
	/**
		creates a menu item
	**/
	public function addMenuItem($text,$url){
		echo '<li class="pushy-link">';
		$this->addLink($text,$url);
		echo '</li>';
	}
	
	
	public function addSubmenu($text){
		echo '<li class="pushy-submenu">';		
		$this->addLink($text,'#');
		echo '<ul>';
	}
	
	
	public function addSubMenuItems($arraylinks){		
		foreach ($arraylinks as $key => $value) {
				$this->addMenuItem($key,$value);
		}
	}
	
	

	public function closeSubMenu(){
		echo '</ul>';
			echo '</li>';
	}
	
	/**
	change plugin=string to boolean
	**/
	public function fixPlugin($plugin){
		if($plugin=='false'){
			return false;
		}	
	}
	
	
	function addLink($text,$url){
		try{
			echo $this->Html->link($text,$url);
		}
		catch(Exception $e)	{
			//error
			echo $this->Html->link('LINK_ERROR','url');
		}
	}

}

?>