<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Descripcion
 *
 * @ORM\Table(name="descripcion")
 * @ORM\Entity
 */
class Descripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="producto_id", type="integer", nullable=false)
     */
    private $productoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $total;


}

