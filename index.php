<?php
/**
* @TempName  Template DEMO
* @version   1.0.0 09-06-2009 13:06:37
* @author    TuanVA
* @copyright Copyright (C) 2009 TuanVA
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>

<body class="width_<?php echo $this->params->get('template_width'); ?>">
<div id="tva-container">
	<div id="tva-header">
		<a href="index.php">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" />
		</a>
		<?php if ($this->countModules('user4')):?>
			<jdoc:include type="modules" name="user4" style="raw" />
		<?php endif; ?>
    </div>
    <div id="tva-menu_bar"></div>
    <div id="tva-content">
		<?php if ($this->countModules('left')): ?>
    	<div id="tva-left_nav">
			<jdoc:include type="modules" name="left" style="xhtml" />
			
		</div>
		<?php endif; ?>
		<?php if ($this->countModules('right')): ?>
        <div id="tva-right_nav">
			<jdoc:include type="modules" name="right" style="xhtml" />
		</div>
		<?php endif; ?>			
        <div id="tva-info">
			<div id="tva-pathway"><strong>You are here:</strong> <jdoc:include type="module" name="breadcrumbs" /></div>
			<jdoc:include type="component" />
		</div>
		
    </div>
    <div id="tva-footer">&copy 2009 Copyright By TuanVA</div>	
	<jdoc:include type=”modules” name=”debug” />
</div>
</body>
</html>