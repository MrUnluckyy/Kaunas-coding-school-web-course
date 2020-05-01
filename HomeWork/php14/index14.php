<?php

    define('WEBSITE_START_DAY', 'JUN 13, 2019');
    $webStartDateInt = strtotime(WEBSITE_START_DAY);

    function showDate($startDate)
    {
        if (date('Y', $startDate) === date('Y'))
        {
            echo '&copy;' . date('Y', $startDate);
        } else
            {
                echo '&copy;' . date('Y', $startDate) . '-' . date('Y');
            }
    }

    echo showDate($webStartDateInt);

?>
