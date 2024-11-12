<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

    class Environment extends Model
    {
        protected $table = 'environments';

        protected $fillable = ['name'];

        protected $hidden = ['project_id'];

        public function project():BelongsTo
        {
            return $this->belongsTo(Project::class);
        }

        public function deployments():HasMany
        {
            return $this->hasMany(Deployment::class);
        }
    }