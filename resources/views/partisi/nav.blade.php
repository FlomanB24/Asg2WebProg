<nav class="navbar navbar-expand-lg navbar-dark bg-nav shadow-sm fixed-top">
    <div class="container">
        <img src="logo.png" alt="" width="40" class="logopd" >
        <a class="navbar-brand" href="/">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "MyPortfolios") ? 'active' : '' }}" href="/ports">Project</a>
            </li>
            </ul>
            <span class="navbar-text">
            Everything you can imagine is real!
            </span>
        </div>
    </div>
</nav>