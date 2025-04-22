<!DOCTYPE html>
<html>

<head>
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <nav class="mb-4">
            <a href="{{ route('tasks.index') }}" class="btn btn-primary"> <i class="bi bi-card-list"></i> All Tasks</a>
            <a href="{{ route('tasks.create') }}" class="btn btn-success"><i class="bi bi-file-plus"></i> Create Task</a>
        </nav>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>

</html>