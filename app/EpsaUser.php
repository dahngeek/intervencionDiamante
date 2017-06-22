<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class EpsaUser extends Base
{

  /**
   * Validation rules
   *
   * @var array
   */
  public static $rules = [
    'name' => 'required',
    'phone' => 'required',
  ];

}
