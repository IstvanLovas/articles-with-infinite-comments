<?php

function setActiveNavigation($path, $active = 'active') {
	return Request::is($path) ? $active : '';
}