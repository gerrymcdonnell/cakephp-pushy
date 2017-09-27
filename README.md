# Gerrymcdonnell/Pushy plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require gerrymcdonnell/pushy:dev-master
```

##Instructions:
1) Add to your bootstrap file;
```
Plugin::load('Gerrymcdonnell/Pushy',['routes' => true]);
```


2) Add to your default layout just after the start of the body tag;
```//pass title of menu to element
echo $this->element('Gerrymcdonnell/Pushy.newpushymenu',['pushymenutitle'=>'Pushy Menu']);
```

3) Add Jquery library to your default template;
 eg 
 
echo $this->Html->script('https://code.jquery.com/jquery-1.12.4.min.js');

4) create the following two database tables;

```
-- Table structure for table `pushymenus`
--

CREATE TABLE `pushymenus` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `plugin` varchar(50) NOT NULL DEFAULT 'false',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pushymenus_items`
--

CREATE TABLE `pushymenus_items` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pushymenu_id` int(11) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `plugin` varchar(50) NOT NULL DEFAULT 'false',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `pushymenus`
--
ALTER TABLE `pushymenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pushymenus_items`
--
ALTER TABLE `pushymenus_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `pushymenus`
--
ALTER TABLE `pushymenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pushymenus_items`
--
ALTER TABLE `pushymenus_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
```

5) Add items to these tables;
you can access the menu controller at;

http://localhost/[yourcakefolder]/gerrymcdonnell/pushy/pushymenus


More info to come.
	
