<?php

namespace leziak\mvc\routing;

function getControllerFromUrl()
{
    if(isset($_GET['page'])) return $_GET['page'];
    return 'index';
}