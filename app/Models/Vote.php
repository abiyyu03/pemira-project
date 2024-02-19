<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vote extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id'
    ];

    // Relationship
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Check if user has voted
    public static function hasVoted($user_id)
    {
        return User::find($user_id)->status == 1;
        // return Vote::where('user_id', $user_id)->exists();
    }

    //get voters
    public static function getVoterData($type)
    {
        if ($type == 'bem') {
            return Vote::whereHas('candidate', function ($q) {
                $q->where('category', 'Badan Eksekutif Mahasiswa');
            })->get();
        } else if ($type == 'hmpsti') {
            return Vote::whereHas('candidate', function ($q) {
                $q->where('category', 'Himpunan Mahasiswa Teknik Informatika');
            })->get();
        } else if ($type == 'hmpssi') {
            return Vote::whereHas('candidate', function ($q) {
                $q->where('category', 'Himpunan Mahasiswa Sistem Informasi');
            })->get();
        }
    }

    // Insert vote
    public static function insertVote($candidate_id, $user_id)
    {
        // Make Transaction
        DB::transaction(function () use ($candidate_id, $user_id) {
            // Insert vote
            foreach ($candidate_id as $candidate_id) {
                Vote::create([
                    'candidate_id' => $candidate_id,
                    'user_id' => $user_id,
                ]);
            }

            // Update Staus User
            User::find($user_id)->update([
                'status' => 1,
            ]);
        });
    }
}
