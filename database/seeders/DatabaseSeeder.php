<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Contact;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(100)
            ->create()
            ->each(function (User $user) {
                $user->contacts()->saveMany(
                    Contact::factory()
                        ->count(4)
                        ->make()
                )->each(function (Contact $contact) {
                    $contact->addresses()->saveMany(
                        Address::factory()
                            ->count(4)
                            ->make()
                    );
                });
        });
    }
}
