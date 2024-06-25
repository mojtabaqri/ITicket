<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
 /* ServiceCategory

        id: id foreign:Services.service_category_id
        name: string
        description: bigInteger
        parent_id: bigInteger

  */

    use HasFactory;
}
