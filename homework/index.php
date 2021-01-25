<?php
session_start();
echo 'id = '.session_id();
//session_id('asdfqe12.-as');
session_regenerate_id();
//session_unset();