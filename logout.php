<?php
	session_start();
	session_destroy();
	session_unset('admin_id');
	header('location:../index.html');