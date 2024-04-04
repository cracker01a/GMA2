<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Tableau de board</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('WorkYear') }}">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Année de Gestion</span>
                    </a>
                 
                </li>

           

                <li>
                    <a href="{{ route('dashboard.pages-404') }}">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Administrateurs</span>
                    </a>
                   
                </li>

                <li>
                    <a href="{{ route('dashboard.pages-404') }}">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Demande d'adhesion</span>
                    </a>
                   
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                       
                        <span data-key="t-email">Aspirants</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>  <a href="apps-email-inbox.html" data-key="t-inbox">profil Aspirants</a></li>
                        <li><a href="apps-email-read.html" data-key="t-read-email">Formations</a></li>
                        <li><a href="apps-email-read.html" data-key="t-read-email">processus</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                       
                        <span data-key="t-email">Membres</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>  <a href="apps-email-inbox.html" data-key="t-inbox">profil Aspirants</a></li>
                        <li><a href="apps-email-read.html" data-key="t-read-email">Formations</a></li>
                        <li><a href="apps-email-read.html" data-key="t-read-email">processus</a></li>
                    </ul>
                </li>

                

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                       
                        <span data-key="t-email">Activités</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="apps-email-inbox.html" data-key="t-inbox">Evenements</a></li>
                        <li><a href="apps-email-read.html" data-key="t-read-email">payments</a></li>
                        
                    </ul>
                </li>

           

            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
