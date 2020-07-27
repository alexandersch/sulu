<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Component\Rest\ListBuilder\Doctrine\FieldDescriptor;

/**
 * This class defines the necessary information for a field to resolve it within a Doctrine Query for the ListBuilder.
 *
 * @ExclusionPolicy("all")
 */
class DoctrineCountDistinctFieldDescriptor extends DoctrineFieldDescriptor
{
    public function getSelect()
    {
        return 'COUNT(DISTINCT(' . $this->encodeAlias($this->getEntityName()) . '.' . $this->getFieldName() . '))';
    }
}
