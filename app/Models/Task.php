<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model {
    use HasFactory;

    // Task fields for the Task Management System
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'priority',
        'due_date'
    ];

    // Status options: pending, completed
    // Priority options: low, medium, high

    public function user() {
        return $this->belongsTo(User::class);
    }
}
