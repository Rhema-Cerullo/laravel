<?php $__env->startSection('title'); ?>
Plan Well, Forget Nothing
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    
<style>
    #calendar{
        transform: scale(0.9);
        background: rgb(248, 248, 248);
    }
</style>
   
   <link rel="stylesheet" href="<?php echo e(asset('/css/fullcalendar.css')); ?>">
   
      <link rel="stylesheet" href="<?php echo e(asset('/css/toastr.min.css')); ?>">
      
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="">

    <h1>Plan Well, Forget Nothing !</h1>

    <div class="container p-0 ">

    <div id='calendar' class="col-10 mx-auto m-0 p-0 float-left"></div>

    </div>

</div>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('script'); ?>

   

    
    <script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>


   
    <script src="<?php echo e(asset('/js/moment.min.js')); ?>"></script>

   
    <script src="<?php echo e(asset('/js/fullcalendar.js')); ?>"></script>

   
    <script src="<?php echo e(asset('/js/toastr.min.js')); ?>"></script>



<script>

$(document).ready(function () {



var SITEURL = "<?php echo e(url('/')); ?>";



$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var calendar = $('#calendar').fullCalendar({

                    editable: true,

                    events: SITEURL + "/api/fullcalender",

                    displayEventTime: false,

                    editable: true,

                    eventRender: function (event, element, view) {

                        if (event.allDay === 'true') {

                                event.allDay = true;

                        } else {

                                event.allDay = false;

                        }

                    },

                    selectable: true,

                    selectHelper: true,

                    select: function (start, end, allDay) {

                        var title = prompt('Event Title:');
                        var desc = prompt('Event Brief description:');

                        if (title && desc) {

                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");

                            $.ajax({

                                url: SITEURL + "/api/task",

                                data: {
                                    title: title,
                                    description: desc,
                                    start: start,
                                    end: end,
                                    user_id: <?php echo e(Auth::user()->id); ?>,
                                    type: 'add'
                                },

                                type: "POST",

                                success: function (data) {

                                    displayMessage("Event Created Successfully");



                                    calendar.fullCalendar('renderEvent',

                                        {

                                            id: data.id,

                                            title: title,

                                            start: start,

                                            end: end,

                                            allDay: allDay

                                        },true);



                                    calendar.fullCalendar('unselect');

                                }

                            });

                        }

                    },

                    eventDrop: function (event, delta) {
 
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");

                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");



                        $.ajax({

                            url: SITEURL + '/api/task',

                            data: {

                                title: event.title,

                                start: start,

                                end: end,

                                id: event.id,

                                type: 'update'

                            },

                            type: "POST",

                            success: function (response) {

                                displayMessage("Event Updated Successfully");

                            }

                        });

                    },

                    eventClick: function (event) {

                        var deleteMsg = confirm("Do you really want to delete?");

                        if (deleteMsg) {

                            $.ajax({

                                type: "POST",

                                url: SITEURL + '/api/task',

                                data: {

                                        id: event.id,

                                        type: 'delete'

                                },

                                success: function (response) {

                                    calendar.fullCalendar('removeEvents', event.id);

                                    displayMessage("Event Deleted Successfully");

                                }

                            });

                        }

                    }

                });

});

function displayMessage(message) {

    toastr.success(message, 'Event');
}

</script>

   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project\comfival\resources\views/fullcalendar.blade.php ENDPATH**/ ?>