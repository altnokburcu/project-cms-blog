<?php

$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_PORT);
return $db->getConn();
