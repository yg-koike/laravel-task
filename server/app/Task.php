<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    const STATUS = [
      1 => [ 'label' => '未視聴', 'class' => 'badge-danger' ],
      2 => [ 'label' => '視聴中',  'class' => 'badge-info' ],
      3 => [ 'label' => '録画視聴完了', 'class' => 'badge-success' ],
      4 => [ 'label' => '配信視聴完了', 'class' => 'badge-success' ],
    ];

    public function getStatusLabelAttribute()
    {
        
      $status = $this->attributes['status'];

      if (!isset(self::STATUS[$status])) {
         return '';
      }

      return self::STATUS[$status]['label'];
    }

  public function getStatusClassAttribute()
  {
    
    $status = $this->attributes['status'];

    if (!isset(self::STATUS[$status])) {
        return '';
    }

    return self::STATUS[$status]['class'];
  }

  public function getFormattedDueDateAttribute()
  {
    return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['due_date'])->format('m/d/H:i');
  }
}