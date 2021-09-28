<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('blogs')->insert([
            'title' => 'Blog 1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed',
            'author' => 'Author 1',
            'slug' => 'blog-1',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur consectetur',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('blogs')->insert([
            'title' => 'Blog 2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed euismod, nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed',
            'author' => 'Author 2',
            'slug' => 'blog-2',
            'excerpt' => 'nisl eget consectetur consectetur, nisi nisl tincidunt nisi, euismod consectetur nisi nisi vitae nisi. Sed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}