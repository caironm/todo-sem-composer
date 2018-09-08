<?php

get('/exemplo/([a-z0-9]+(?:-[a-z0-9]+)*)', function($link){

	echo "<h1>{$link}</h1>";
});