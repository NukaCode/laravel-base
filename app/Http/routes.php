<?php

// Must not be logged in to view
include_once __DIR__ . '/Routes/Guest/routes.php';

// Must be logged in to view
include_once __DIR__ . '/Routes/Auth/routes.php';

// Can be logged in or out.
include_once __DIR__ . '/Routes/NoAuth/routes.php';
