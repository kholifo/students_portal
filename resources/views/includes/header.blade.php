<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container col-8 p-0">
            <a class="navbar-brand" href="#">Stu_Por</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subjects.index') }}">Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('groups.index') }}">Groups</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
