$(function () {
    /** Initialize wizard for adding Initiatives/tasks */
    $("#form-horizontal").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slide"
    });


     $('a[href="#finish"]').hide();

     $(".table").DataTable(), $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"]
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")



$(document).on( "click", ".DeleteInitiativeClass", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this Initiative, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});


$(document).on( "click", ".DeleteProjectClass", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this Project, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});




$(document).on( "click", ".DeleteEventClass", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this Event, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});





$(document).on( "click", ".DeleteUserClass", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this User, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});




$(document).on( "click", ".DeleteJPC", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this JPC, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});







$(document).on( "click", ".DeletePowerStructure", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this Power Structure, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});


$(document).on( "click", ".DeletePowerRosultion", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this resolution, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});





$(document).on( "click", ".DeleteProjectEventResolution", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this resolution, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});


$(document).on( "click", ".DeleteJPCResolution", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this resolution, This action is not reversible",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});


$('textarea.editor').ckeditor();


  CKEDITOR.disableAutoInline = true;
  CKEDITOR.config.height = 100;
   CKEDITOR.config.width = 'auto';

  $('.editable').ckeditor();

  $('.modal-dialog').addClass('modal-lg');
  $('.dataTables_wrapper').addClass('me_timo');


setInterval(function() {
 

  $('.table').removeClass('nowrap');


}, 1000);


});



