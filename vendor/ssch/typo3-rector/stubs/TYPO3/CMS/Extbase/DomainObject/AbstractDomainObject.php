<?php

namespace RectorPrefix20210914\TYPO3\CMS\Extbase\DomainObject;

if (\class_exists('TYPO3\\CMS\\Extbase\\DomainObject\\AbstractDomainObject')) {
    return;
}
class AbstractDomainObject
{
    public function __wakeup()
    {
    }
}
