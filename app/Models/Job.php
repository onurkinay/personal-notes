<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listinings';
    protected $fillable = ['employer_id','title', 'salary'];
//  protected $guarded = []

    public function employer(){ // $job->employer->name
        return $this->belongsTo(Employer::class);
    }

    public function tags(){ // $job->tags
        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listining_id");
    }
}


?>