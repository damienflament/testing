<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2015 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Component\Testing\DataFixtures\PHPCR;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ODM\PHPCR\Document\Generic;

/**
 * @deprecated Deprecated as of Testing 1.1, will be removed in 2.0
 */
class LoadBaseData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        @trigger_error('The '.__NAMESPACE__.'\LoadBaseData data fixture is deprecated since version 1.1 and will be removed in 2.0.', E_USER_DEPRECATED);

        $root = $manager->find(null, '/');
        $base = new Generic;
        $base->setNodename('test');
        $base->setParent($root);
        $manager->persist($base);
        $manager->flush();
    }
}

