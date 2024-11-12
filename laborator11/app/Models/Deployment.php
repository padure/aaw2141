<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Deployment extends Model
    {
        protected $table = 'deployments';

        protected $fillable = ['commit_hash', 'environment_id'];

        protected $hidden = ['environment_id'];

        public function environment():BelongsTo
        {
            return $this->belongsTo(Environment::class);
        }
    }