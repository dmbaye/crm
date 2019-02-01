<aside class="sidebar py-4">
    <h4 class="mb-4">{{ auth()->user()->friendlyName() }}</h4>
    <div>
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active-link' : '' }}">
            <i class="fa fa-home mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('contacts.index') }}" class="{{ Request::is('contacts') ? 'active-link' : '' }}">
            <i class="fa fa-users mr-3"></i>
            Contacts
        </a>
        <a href="{{ route('companies.index') }}" class="{{ Request::is('companies') ? 'active-link' : '' }}">
            <i class="fa fa-city mr-3"></i>
            Companies
        </a>
        <a href="{{ route('projects.index') }}" class="{{ Request::is('projects') ? 'active-link' : '' }}">
            <i class="fa fa-briefcase mr-3"></i>
            Projects
        </a>
        <a href="#">
            <i class="fa fa-tasks mr-3"></i>
            Tasks
        </a>
        <a href="#">
            <i class="fa fa-chart-bar mr-3"></i>
            Reports
        </a>
        <a href="{{ route('files.index') }}" class="{{ Request::is('file') ? 'active-link' : '' }}">
            <i class="fa fa-file mr-3"></i>
            Files
        </a>
        <a href="#">
            <i class="fa fa-cog mr-3"></i>
            Settings
        </a>
    </div>
</aside>
