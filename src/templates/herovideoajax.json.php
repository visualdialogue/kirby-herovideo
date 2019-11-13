<?php

    /*
     * getting json from a snippet to pass next month info over
     * calendarwidget.json.php works via plugin router
     */
    // this should be in controller, but can't seem to use a controller in a plugin at this time
    // can't pass $calendar here as is stringified and rendered useless as object
    // but can pass strings
    $json = (string)snippet('herovideoajax', array('page' => $site->find('home')), true);

    // JSON encode the $data array
    echo json_encode($json);