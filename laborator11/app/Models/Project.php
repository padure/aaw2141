<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Project extends Model
    {
        protected $table = 'projects';
        
        protected $fillable = ['name'];

        public function environments():HasMany
        {
            return $this->hasMany(Environment::class);
        }
    }