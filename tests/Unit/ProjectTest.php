<?php

namespace Tests\Unit;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_has_a_path() {

        $project = Project::factory()->create();

        $this->assertEquals("/projects/" . $project->id, $project->path());
    }
}
