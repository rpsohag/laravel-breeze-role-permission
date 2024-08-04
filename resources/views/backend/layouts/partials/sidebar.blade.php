<div class="side-nav side-nav-light side-nav-expand">
    <div class="side-nav-header">
        <div class="logo px-6">
            <img src="{{ asset('backend/img/logo/logo-light-full.png') }}" alt="Elstar logo">
        </div>
    </div>
    <div class="side-nav-content relative side-nav-scroll">
        <nav class="menu menu-transparent px-4 pb-4">
            <div class="menu-group">
                <div class="menu-title">Application control</div>
                <ul>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2">
                        <a class="menu-item-link" href="{{ route('admin.dashboard') }}">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="menu-item-text">Dashboard</span>
                        </a>
                    </li>
                   
            <div class="menu-group">
                <div class="menu-title">Authentication</div>
                <ul>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="menu-item-text">Users</span>
                        </div>
                        <ul>
                            <li data-menu-item="signin-simple" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-simple.html">
                                    <span>Create User</span>
                                </a>
                            </li>
                            <li data-menu-item="signin-side" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-side.html">
                                    <span>List of Users</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="menu-item-text">Admins</span>
                        </div>
                        <ul>
                            <li data-menu-item="signin-simple" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-simple.html">
                                    <span>Create Admin</span>
                                </a>
                            </li>
                            <li data-menu-item="signin-side" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-side.html">
                                    <span>List of Admins</span>
                                </a>
                            </li>
                        </ul>
                    </li>
  
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="menu-item-text">Role & Permissions</span>
                        </div>
                        <ul>
                            <li data-menu-item="signin-side" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-side.html">
                                    <span>Create roles</span>
                                </a>
                            </li>
                            <li data-menu-item="signin-simple" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-simple.html">
                                    <span>List of roles</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
          
            <div class="menu-group">
                <div class="menu-title menu-title-transparent">
                    Guide
                </div>
                <ul>
                    <li data-menu-item="classic-documentation" class="menu-item menu-item-single mb-2">
                        <a class="menu-item-link" href="http://www.themenate.net/elstar-html-doc" target="_blank" >
                            <span class="menu-item-icon">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </span>
                            <span class="menu-item-text">Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>	
    </div>
</div>