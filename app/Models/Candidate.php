<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'candidate_number',
        'leader_id',
        'vice_leader_id',
        'vision_mission',
        'category',
        'photo',
        'nickname'
    ];

    // Relationship
    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function vice_leader()
    {
        return $this->belongsTo(User::class, 'vice_leader_id');
    }

    // Get candidate by category
    public static function getCandidateByCategory($major)
    {
        /**
         * Get all candidates
         * 
         * if the users the major is Teknik Informatika he can vote for candidates category Hima TI and BEM
         * else if the users the major is Other Teknik informatika he can vote for candidates category Hima SI and BEM
         */

        $candidates_category = [];

        if ($major === 'Teknik Informatika') {
            $candidates_category = ["Badan Eksekutif Mahasiswa", "Himpunan Mahasiswa Teknik Informatika"];
        } else {
            $candidates_category = ["Badan Eksekutif Mahasiswa", "Himpunan Mahasiswa Sistem Informasi"];
        }

        return Candidate::with(['leader', 'vice_leader'])->whereIn('category', $candidates_category)->get();
    }
}
