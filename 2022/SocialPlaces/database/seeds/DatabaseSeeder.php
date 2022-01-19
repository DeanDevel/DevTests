<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'role' => 2
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('secret'),
            'role' => 1
        ]);
        DB::table('contacts')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'gender' => 'male',
            'content' => 'test content',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);
        DB::table('contacts')->insert([
            'name' => 'newtest',
            'email' => 'new@test.com',
            'gender' => 'androgyne',
            'content' => 'content test',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);
        DB::table('contacts')->insert([
            'name' => 'asdf',
            'email' => 'asdfasdf@asdf.com',
            'gender' => 'female',
            'content' => 'loving this',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);
        DB::table('contacts')->insert([
            'name' => 'ghkg',
            'email' => 'ghghf@asdf.com',
            'gender' => 'cisgender',
            'content' => 'dont know',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);
        DB::table('contacts')->insert([
            'name' => 'uiioiuer',
            'email' => 'ureieur@asdf.com',
            'gender' => 'gender outlaw',
            'content' => 'gotta fill database',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);
        DB::table('contacts')->insert([
            'name' => 'kdflfk',
            'email' => 'kdflfk@kdfldk.com',
            'gender' => 'null-gender',
            'content' => 'different all',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);
        DB::table('contacts')->insert([
            'name' => 'fdkdlssk',
            'email' => 'nodbd@asdf.com',
            'gender' => 'nonbinary',
            'content' => 'what the heck',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);

    }
}


