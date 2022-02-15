<?php 

namespace Model;

Class Project extends ActiveRecord{
  protected static $tabla = 'projects';
  protected static $columnas = ['id', 'nombre', 'descripcion', 'imagen', 'url', 'repositorio', 'categorias'];

  public $id;
  public $nombre;
  public $descripcion;
  public $imagen;
  public $url;
  public $repositorio;
  public $categorias;
}
