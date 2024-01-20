<!DOCTYPE html>
<html>
    <body>
        @foreach($projects as $project)
            {{ $project->title }}
        @endforeach
    </body>
</html>