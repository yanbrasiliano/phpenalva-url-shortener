<?php

namespace App\Models;

use Core\BaseModel;

class Link extends BaseModel
{
  protected $table = 'links';

  public function __construct(\PDO $pdo)
  {
    parent::__construct($pdo);
  }

  public function rules(): array
  {
    return
      [
        'url' => 'required|min:1|max:255',
        'short_url' => 'required|min:1|max:255',
      ];
  }
}
