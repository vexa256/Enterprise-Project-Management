   @error('name')


   <script type="text/javascript">
      
      Swal.fire('Error', 'User Account Creation Failed , {{ $message }}', 'error')
    </script>
                                   
  @enderror     

   @error('email')
         <script type="text/javascript">
      
      Swal.fire('Error', 'User Account Creation Failed , {{ $message }}', 'error')
    </script>
  @enderror                      
                              


  


   @if(session()->has('User_delete'))


    <script>
      <?php echo session()->get('User_delete')  ; ?>  
    </script>



         @endif






   @if(session()->has('Update_Use_Role'))


    <script>
      <?php echo session()->get('Update_Use_Role')  ; ?>  
    </script>



         @endif



   @if(session()->has('Event_update_status'))


    <script>
      <?php echo session()->get('Event_update_status')  ; ?>  
    </script>



         @endif



   @if(session()->has('Event_delete'))

     <script>
      <?php echo session()->get('Event_delete')  ; ?>  
    </script>



         @endif



   @if(session()->has('Event_update'))

   <script>
      <?php echo session()->get('Event_update')  ; ?>  
    </script>


      @endif




   @if(session()->has('Event_create'))


    <script>
      <?php echo session()->get('Event_create')  ; ?>  
    </script>


   @endif


   @if(session()->has('AttachProject_notify'))

   <script>
      <?php echo session()->get('AttachProject_notify')  ; ?>  
    </script>

   @endif


   @if(session()->has('Duplicate_checker'))
   <script>
      <?php echo session()->get('Duplicate_checker')  ; ?>  
    </script>

   @endif
   @if(session()->has('Update_notify'))
    <script>
      <?php echo session()->get('Update_notify')  ; ?>  
    </script>
@endif 




@if(session()->has('Delete_notify'))
    <script>
      <?php echo session()->get('Delete_notify')  ; ?>  
    </script>
@endif 



@if(session()->has('Update_notify_status'))
    <script>
      <?php echo session()->get('Update_notify_status')  ; ?>  
    </script>
@endif 




    @if (isset($script_data))
        <script type="text/javascript">
            
           <?php echo $script_data ?>

        </script>

        @endif



