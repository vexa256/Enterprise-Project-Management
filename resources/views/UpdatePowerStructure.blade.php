        @include('main.head')
        @include('main.topnav')
        @include('main.nav')
        @include('main.mainContent')
        <?php /* Manage project view */ ?>
         @include('powerStructures.UpdatePowerStructure')
         <?php /* Manage project view */ ?>
        @include('main.footer')