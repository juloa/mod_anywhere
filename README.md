*How to use

1) Install the joomla module
2) In your component view

<?php
include_once(JPATH_ROOT.'/modules/mod_anywhere/helper.php');
ob_start();
?>
Some HTML code
<?php
Anywhere::getInstance()->set('blockname',ob_get_clean());

or

<?php
include_once(JPATH_ROOT.'/modules/mod_anywhere/helper.php');
Anywhere::getInstance()->set('blockname',$someHTMLcontent);

3) Publish a module of type mod_anywhere (set block = "blockname")

----------------------------------
How to use without publishing a module but anywhere in any php code

Follow points 1) and 2)

then 3)

<?php
include_once(JPATH_ROOT.'/modules/mod_anywhere/helper.php');
 echo Anywhere::getInstance()->get("blockname");



