<?php

/**
 * (c) Fabryka Stron Internetowych sp. z o.o <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminBundle\Structure;

use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @author Norbert Orzechowicz <norbert@fsi.pl>
 */
interface DoctrineAdminElementInterface extends ElementInterface
{
    /**
     * @param ManagerRegistry $registry
     * @return $this
     */
    public function setManagerRegistry(ManagerRegistry $registry);
}