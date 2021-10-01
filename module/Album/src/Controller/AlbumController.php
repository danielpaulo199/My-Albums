<?php

namespace Album\Controller;

use Album\Model\AlbumTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;


class AlbumController extends AbstractActionController
{
  // Add this property:
  private $table;

  // Add this constructor:
  public function __construct(AlbumTable $table)
  {
    $this->table = $table;
  }

  //views do video
  public function indexAction()
  {
    return new ViewModel([
      'albums' => $this->table->fetchAll(),
    ]);
  }

  public function addAction()
  {
    return new ViewModel();
  }

  public function editAction()
  {
    return new ViewModel();
  }

  public function deleteAction()
  {
    return new ViewModel();
  }
}
