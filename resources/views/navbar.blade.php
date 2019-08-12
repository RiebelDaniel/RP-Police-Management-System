@auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="/">Z01 Zivil-Polizei</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dokumente
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach($documents as $document)

                            <a class="dropdown-item" href="{{ $document->url }}" target="_blank">{{ $document->name }}</a>

                        @endforeach



                        @can("manage documents")
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/document/manage">Verwalte Dokumente</a>
                        @endcan

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bewertungen
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/rating/ask">Anfordern</a>
                        <a class="dropdown-item" href="/rating/create">Abgeben</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/rating/forMe">Forderungen an Dich</a>
                    </div>
                </li>


                @can('manage news')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        News
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/news/create">Erstellen</a>

                    </div>
                </li>
                @endcan


                @if(auth()->user()->can('edit permissions') || auth()->user()->can('create users') || auth()->user()->can('show ratings') )
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin-Panel
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @can("create users")
                            <a class="dropdown-item" href="/user/create">User Erstellen</a>
                            @endcan

                            <a class="dropdown-item" href="/user">Alle User</a>

                            @can("show ratings")
                            <a class="dropdown-item" href="/rating">Alle Bewertungen</a>
                            @endcan

                            @can("edit permissions")
                            <a class="dropdown-item" href="/permissions">Rechte System</a>
                            @endcan
                        </div>
                    </li>

                @endif






                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->username }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/user/{{ auth()->user()->id }}"> Mein Profil</a>
                        <a class="dropdown-item" href="/logout">Log Out</a>

                    </div>
                </li>

            </div>
        </div>

    </nav>
@endauth


