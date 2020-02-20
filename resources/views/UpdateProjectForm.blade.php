        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')
        <?php /* Manage project view */ ?>
         @include('projects.UpdateProjectForm')
         <?php /* Manage project view */ ?>
        @include('main.footer')