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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productoId
     *
     * @param integer $productoId
     *
     * @return Descripcion
     */
    public function setProductoId($productoId)
    {
        $this->productoId = $productoId;

        return $this;
    }

    /**
     * Get productoId
     *
     * @return integer
     */
    public function getProductoId()
    {
        return $this->productoId;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Descripcion
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Descripcion
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
}
