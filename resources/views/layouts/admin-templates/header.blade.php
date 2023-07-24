<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin') }}">{{__("template.dashboard")}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{__("template.genres")}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('genre') }}">{{__("template.all-genres")}}</a></li>
                        <li><a class="dropdown-item" href="{{ route('genre.create') }}">{{__("template.add-genre")}}</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{__("template.news")}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('articles.index') }}">{{__("template.all-news")}}</a></li>
                        <li><a class="dropdown-item" href="{{ route('articles.create') }}">{{__("template.add-news")}}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{__("template.tags")}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('tags.index') }}">{{__("template.all-tags")}}</a></li>
                        <li><a class="dropdown-item" href="{{ route('tags.create') }}">{{__("template.add-tags")}}</a></li>
                    </ul>
                </li>
                <!--Roles and perissions-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{__("Rights and Roles")}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.roles') }}">{{__("Roles")}}</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="{{__("template.search")}}" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">{{__("template.search")}}</button>
            </form>
        </div>
    </div>
</nav>
