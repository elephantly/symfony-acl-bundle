<?php

namespace WMC\Symfony\Provider\Doctrine;

class ClassTargetIdentity extends AbstractTargetIdentity
{
    public function __construct($className)
    {
        parent::__construct($className);
    }
}