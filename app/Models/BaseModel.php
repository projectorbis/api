<?php

namespace Orbis\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {
    /**
     * {@inheritdoc}
     */
    const CREATED_AT = 'createdAt';

    /**
     * {@inheritdoc}
     */
    const UPDATED_AT = 'updatedAt';
}
