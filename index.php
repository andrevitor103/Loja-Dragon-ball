<?php

	include('Template.php');

	$tmp = new Template();

	$tmp->render([], ['header.phtml', 'home.php', 'footer.phtml']);