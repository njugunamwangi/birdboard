<!DOCTYPE html>
<html>
    <body>
        <ul>
            @forelse($projects as $project)
                <li>
                    <a href="{{ $project->path() }}">{{ $project->title }}</a>
                </li>
            @empty
                <p>No projects yet</p>
            @endforelse
        </ul>
    </body>
</html>