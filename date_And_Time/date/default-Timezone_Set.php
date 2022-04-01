<?php
date_default_timezone_set("ASIA/Calcutta");
echo "The time is " . date("h:i:sa");//it will display current timing (hrs:min:sec)date_default_timezone_set("America/New_York");
//If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.
//So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.
?>