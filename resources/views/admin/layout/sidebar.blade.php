<div class="sidebar" data-background-color="black" data-active-color="warning">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Marketing FLS 2017
            </a>
        </div>

        <ul class="nav">
            @if ($request->is('*admin'))
                <li class="active">
            @else
                <li>
            @endif
                <a href="{{ route('dashboard') }}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            @if ($request->is('*/sponsor-list'))
                <li class="active">
            @else
                <li>
            @endif
                <a href="{{ route('sponsor-list') }}">
                    <i class="ti-view-list-alt"></i>
                    <p>Tabel Sponsorship</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="ti-export"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>
