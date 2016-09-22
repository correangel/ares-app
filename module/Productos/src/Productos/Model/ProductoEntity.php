<?php
/**
 * Created by PhpStorm.
 * User: brodriguez
 * Date: 20/09/16
 * Time: 01:03 PM
 */

namespace Productos\Model;


class ProductoEntity
{
    protected $id;
    protected $idcategoria;
    protected $nombcategoria;
    protected $nombre;
    protected $unidadmedidaventas;
    protected $nombunidmedventas;
    protected $preciounidad;
    protected $unidadmedidaalmacen;
    protected $nombunidmedalmacen;
    protected $imagen;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }

    public function getNombcategoria()
    {
        return $this->nombcategoria;
    }

    public function setNombcategoria($nombcategoria)
    {
        $this->nombcategoria = $nombcategoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getUnidadmedidaventas()
    {
        return $this->unidadmedidaventas;
    }

    public function setUnidadmedidaventas($unidadmedidaventas)
    {
        $this->unidadmedidaventas = $unidadmedidaventas;
    }

    public function getNombunidmedventas()
    {
        return $this->nombunidmedventas;
    }

    public function setNombunidmedventas($nombunidmedventas)
    {
        $this->nombunidmedventas = $nombunidmedventas;
    }

    public function getPreciounidad()
    {
        return $this->preciounidad;
    }

    public function setPreciounidad($preciounidad)
    {
        $this->preciounidad = $preciounidad;
    }

    public function getUnidadmedidaalmacen()
    {
        return $this->unidadmedidaalmacen;
    }

    public function setUnidadmedidaalmacen($unidadmedidaalmacen)
    {
        $this->unidadmedidaalmacen = $unidadmedidaalmacen;
    }

    public function getNombunidmedalmacen()
    {
        return $this->nombunidmedalmacen;
    }

    public function setNombunidmedalmacen($nombunidmedalmacen)
    {
        $this->nombunidmedalmacen = $nombunidmedalmacen;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
}