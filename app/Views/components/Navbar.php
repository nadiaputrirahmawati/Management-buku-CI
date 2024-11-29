<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar border-0 shadow-md" style="background-color:#CCEAFF">
            <div class="container-xl  border-0">
                <ul class="navbar-nav d-flex justify-content-center w-100">
                    <li class="nav-item <?= ($active_page == 'dashboard') ? 'active' : ''; ?>">
                        <a class="nav-link text-dark gap-2" href="/" style="font-size: 1.1rem;">
                            <span class="fw-bold" style="font-family: 'telegraf'; letter-spacing: '8px'">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($active_page == 'buku') ? 'active' : ''; ?>">
                        <a class="nav-link text-dark gap-2" href="/buku/data" style="font-size: 1.1rem;">
                            <span class="fw-bold" style="font-family: 'telegraf'; letter-spacing: '8px'">
                                Data
                            </span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($active_page == 'bukuall') ? 'active' : ''; ?>">
                        <a class="nav-link text-dark gap-2" href="/buku/all" style="font-size: 1.1rem;">
                            <span class="fw-bold" style="font-family: 'telegraf'; letter-spacing: '8px'; font-weight: 1rem;">
                                Buku 
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
