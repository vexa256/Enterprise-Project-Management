        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')
        <?php /* Manage project view */ ?>
         @include('projects.TerminatedProjects')
         <?php /* Manage project view */ ?>
        @include('main.footer')