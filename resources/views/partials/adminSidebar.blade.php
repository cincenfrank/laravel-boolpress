<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark vh-100 position-fixed" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">BoolPress Blog</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('guests.home')}}" class="nav-link text-white" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{route('admin.posts.index')}}" class="nav-link text-white @if(Route::currentRouteName()==='admin.posts.index') active
                
            @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Posts
            </a>
        </li>
        {{-- <li>
            <a href="{{route('admin.posts.create')}}" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16">
            <use xlink:href="#table"></use>
        </svg>
        Create New Post
        </a>
        </li> --}}
        <li>
            <a href="{{route('admin.categories.index')}}" class="nav-link text-white @if(Route::currentRouteName()==='admin.categories.index') active
                
            @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#table"></use>
                </svg>
                Categories
            </a>
        </li>
        <li>
            <a href="{{route('admin.tags.index')}}" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#table"></use>
                </svg>
                Tags
            </a>
        </li>
        {{-- <li>
            <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Products
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                Customers
            </a>
        </li> --}}
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ Auth::user()->name}}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
