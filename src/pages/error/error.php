<?php

echo "Joputas ! error " . (isset($_REQUEST["error"]) ? $_REQUEST["error"] : http_response_code());
