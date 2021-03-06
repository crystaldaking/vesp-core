<?php

namespace Vesp\CoreTests\Mock;

use Vesp\Controllers\ModelController;
use Vesp\Models\User;

class CompositeModelController extends ModelController
{
    protected $primaryKey = ['id', 'active'];
    protected $model = User::class;
}
