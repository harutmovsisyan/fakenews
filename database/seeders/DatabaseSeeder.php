<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Role;
use App\Models\RoleUsers;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::factory(10)->create();
        Role::factory(3)->create();
        User::factory(25)->create();
        RoleUsers::factory(25)->create();
        UserInformation::factory(25)->create();
        Tag::factory(10)->create();
        Post::factory(100)->create();
        Photo::factory(125)->create();
        PostTag::factory(120)->create();

    }
}
