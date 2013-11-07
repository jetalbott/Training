<?php

function autoloadClass($objectName)
{
    $relativeName = str_replace(NS, DS, $objectName);
    $absoluteName = DIR_CLASSES . DS . $relativeName . '.php';

    if (file_exists($absoluteName))
    {
        require $absoluteName;

        return TRUE;
    }

    return FALSE;
}

function autoloadInterface($objectName)
{
    $relativeName = str_replace(NS, DS, $objectName);
    $absoluteName = DIR_INTERFACES . DS . $relativeName . '.php';

    if (file_exists($absoluteName))
    {
        require $absoluteName;

        return TRUE;
    }

    return FALSE;
}

spl_autoload_register('autoloadClass', TRUE);
spl_autoload_register('autoloadInterface', TRUE);