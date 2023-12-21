<?php

namespace App\Models;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RevisorAction extends Model
{
    use HasFactory;
    protected $fillable=['announcement_id','action','user_id'];
    public function announcement(){
        return $this->belongsTo(Announcement::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
