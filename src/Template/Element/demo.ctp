<!-- Pushy Menu -->
<?php
    echo $this->Html->css('Gmcd/Pushy.pushy');

    //jQuery
    //echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js');

    //load helper
    $this->loadHelper('Gmcd/Pushy.Pushy');

    //create menu button
    $this->Pushy->addMenuButton($pushymenutitle);
?>
		
        <nav class="pushy pushy-left">
            <ul>

				<?php									
										
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

				?>


            </ul>
        </nav>

        <!-- Site Overlay -->
        <div class="site-overlay"></div>
		
	<?php
        echo $this->Html->script('Gmcd/Pushy.pushy.min');	
	?>
