<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/icons/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-speedometer2 mx-2"></i> Dashboard</a></li>
        <li class="nav-title">Management</li>

        <li class="nav-item"><a class="nav-link" href="{{ route('pendukung.index')}}">
            <i class="bi bi-person-vcard  mx-2"></i>  Pendukung</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('budget.index')}}">
            <i class="bi bi-currency-dollar mx-2"></i> Budget</a>
        </li>        

        <li class="nav-item"><a class="nav-link" href="{{ route('koordinator.index')}}">
            <i class="bi bi-people-fill mx-2"></i> Koordinator</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('relawan.index')}}">
            <i class="bi bi-person-badge mx-2"></i> Relawan</a>
         </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('saksi.index')}}">
            <i class="bi bi-person-badge-fill mx-2"></i> Saksi</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('users.index')}}">
            <i class="bi bi-person-lock mx-2"></i>User</a>
        </li>

        <li class="nav-title">Campaign</li>

        <li class="nav-item"><a class="nav-link" href="{{ route('jadwal_kegiatan.index')}}">
            <i class="bi bi-calendar-check mx-2"></i> Jadwal Kegiatan</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('dpt.index')}}">
            <i class="bi bi-people-fill mx-2"></i>Data DPT</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('aspirasi.index')}}">
                <i class="bi bi-megaphone mx-2"></i>Data Aspirasi</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('issue.index')}}">
            <i class="bi bi-ear mx-2"></i> Data Isue</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('koordinator.index')}}">
            <i class="bi bi-escape mx-2"></i>Quick Count</a>
        </li>

        <li class="nav-title">Website</li>

        <li class="nav-item"><a class="nav-link" href="{{ route('koordinator.index')}}">
            <i class="bi bi-briefcase mx-2"></i> Visi & Misi</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('koordinator.index')}}">
            <i class="bi bi-newspaper mx-2"></i>Program Kerja</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('koordinator.index')}}">
                <i class="bi bi-image mx-2"></i>Gallery Kegiatan</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('koordinator.index')}}">
            <i class="bi bi-play-btn-fill mx-2"></i>Feedback Pendukung</a>
        </li>
    </ul>
    
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>