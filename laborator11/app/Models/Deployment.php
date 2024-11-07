<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Deployment extends Model
    {
        protected $table = 'deployments';

        protected $fillable = ['commit_hash', 'environment_id'];
    }