<body>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $title == 'Dashboard' ? 'active' : 'collapsed' }}" href="/dashboard"> <i class="bi bi-grid">
                    </i> <span> Dashboard</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Users' ? 'active' : 'collapsed' }}" href="/users"> <i
                        class="bi bi-person-lines-fill"> </i> <span> Users</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Transaction' ? 'active' : 'collapsed' }}" href="/transaction"> <i
                        class="bi bi-receipt-cutoff"> </i> <span> Transaction</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Cars' ? 'active' : 'collapsed' }}" href="/cars"> <i
                        class="bx bx-car"> </i> <span> Cars</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Driver' ? 'active' : 'collapsed' }}" href="/driver"> <i
                        class="bx bxs-user-badge"> </i> <span> Driver</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'review' ? 'active' : 'collapsed' }}" href="/review"> <i
                        class="bx bx-comment-edit"> </i> <span> Testimoni</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  {{ $title == 'About Us' ? 'active' : 'collapsed' }}" href="/setting"> <i
                        class="bi bi-ui-checks"> </i> <span> About Us</span> </a>
            </li>

            </li>
            <li class="nav-heading">Document</li>
            <li class="nav-item">
                <a class="nav-link   {{ $title == 'Berkas' ? 'active' : 'collapsed' }}" href="/berkas"> <i class="bi bi-stickies-fill"></i>
                    <span>Berkas</span> </a></li>
        </ul>
    </aside>
</body>