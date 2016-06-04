<!-- Pushy Menu -->
<?php
    
	echo $this->Html->css('Gerrymcdonnell/Pushy.pushy');

    //load helper
    $this->loadHelper('Gerrymcdonnell/Pushy.Pushy');

    //create menu button
    $this->Pushy->addMenuButton($pushymenutitle);
?>
		
	<nav class="pushy pushy-left">
		<ul>				
		<?php
		
			//get data
			use Cake\ORM\TableRegistry;	
			
			//get data from this table for the menus
			$menuitems = TableRegistry::get('Gerrymcdonnell/Pushy.PushyMenus')->find('all',['contain' => ['PushymenusItems']]);				
			
			$i=0;	
			
			foreach ($menuitems as $item) 
			{
		
				$i++;
				//debug($item);
				//fix problem with text based plugin false value
				if($item->plugin=='false'){
					$item->plugin=false;
				}			
				
				//check for submenu items		
				$submenuitems=$item['pushymenus_items'];
			
				if(count($submenuitems)>0){
					//debug($submenuitems);
					//there are subitems for this menu					
					//start submenu					
					//start submenu, top item
					
					$this->Pushy->addSubmenu($item['title'],'');

					
					foreach ($submenuitems as $menuitem) {
						//debug($menuitem);
						//if the menuid_ matches its a submenu else its a new menu
						//add item
						
						$menuitem->plugin=$this->Pushy->fixPlugin($menuitem->plugin);
						
					
							$this->Pushy->addMenuItem($menuitem['title'],[
							'plugin'=>$menuitem->plugin,
								'controller'=>$menuitem->controller,
								'action'=>$menuitem['action']
							]);

						
						/*$this->Pushy->addSubMenuItems($menuitem['title'],
							['plugin'=>$menuitem->plugin,
							'controller'=>$menuitem->controller,
							'action'=>$menuitem['action']
						]);		*/				

					}
						//close the menu
						$this->Pushy->closeSubMenu();
						
					
				}
				else
				{
					//solo menu item i.e no sub items
					
						$this->Pushy->addMenuItem($item['title'],array(
							'plugin'=>$item['plugin'],
							'controller'=>$item['controller'],
							'action'=>$item['display']
						));

				}

		}//end of loop
		
		
		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
			/*
			$this->Pushy->addMenuItem('test','http://www.bbc.co.uk');
			
			//start submenu, top item
			$this->Pushy->addSubmenu('my sub menu','');
			
			//submenu items
			$linksarray=array(
			'test'=>'http://www.rte.ie',
			'cakelink'=>array('controller'=>'users','action'=>'test')
			);
			
			$this->Pushy->addSubMenuItems($linksarray);
			$this->Pushy->closeSubMenu();

			$this->Pushy->addMenuItem('test','http://www.bbc.co.uk');

			$this->Pushy->addMenuItem('PushyMenu','http://www.christopheryee.ca/pushy/');
			$this->Pushy->addMenuItem('PushyMenu Github','https://github.com/christophery/pushy');
			*/
		?>
		</ul>
	</nav>

	<!-- Site Overlay -->
	<div class="site-overlay"></div>
		
	<?php
        echo $this->Html->script('Gerrymcdonnell/Pushy.pushy.min');	
	?>
