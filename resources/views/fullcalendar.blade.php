@extends('layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/') }}">
    <title>Plan Well, Forget Nothing</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">



   {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    <script src="{{ asset('/js/jquery.min.js') }}"></script>

   {{-- <linkrel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css"/> --}}
    <link rel="stylesheet" href="{{ asset('/css/fullcalendar.css') }}">

   {{-- <scriptsrc="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> --}}
    <script src="{{ asset('/js/moment.min.js') }}"></script>

   {{-- <scriptsrc="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> --}}
    <script src="{{ asset('/js/fullcalendar.js') }}"></script>

   {{-- <scriptsrc="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
    <script src="{{ asset('/js/toastr.min.js') }}"></script>

   {{-- <linkrel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/> --}}
    <link rel="stylesheet" href="{{ asset('/css/toastr.min.css') }}">
    {{-- <linkrel="stylesheet" href="{{ asset('/css/schedule.css') }}">--}}

@endsection

@section('content')

<div class="container">

    <h1>Plan Well, Forget Nothing !</h1>

    <div id='calendar'></div>

</div>


<script>

$(document).ready(function () {



var SITEURL = "{{ url('/') }}";



$.ajaxSetup({

    headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

});

var calendar = $('#calendar').fullCalendar({

                    editable: true,

                    events: SITEURL + "/fullcalender",

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

                        if (title) {

                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");

                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");

                            $.ajax({

                                url: SITEURL + "/fullcalenderAjax",

                                data: {

                                    title: title,

                                    start: start,

                                    end: end,

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

                            url: SITEURL + '/fullcalenderAjax',

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

                                url: SITEURL + '/fullcalenderAjax',

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

   {{-- <div class="container">
        <h2>Which Tasks You Want To Schedule</h2>
        <div class="col-10">
            <form class="form-inline" action="">
                {{-- <label for="Tasks" class="mb-2 mr-sm-2">Task Type</label>
                <input type="datetime" class="form-control mb-2 mr-sm-2" placeholder="Enter meeting date" id="date">
                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter time" id="name">
                <button type="submit" class="btn btn-primary mb-2">Save</button>
                <input type="date"> <input type="time">
                <h1>Choose Date & Time</h1>

                <div class="col-10 sm-12">
                    <div class="month">
                        <ul>
                            <li class="prev">&#10094;</li>
                            <li class="next">&#10095;</li>
                            <li>
                                September<br>
                                <span style="font-size:18px">2021</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-10 sm-12">
                    <ul class="weekdays">
                        <li>Mo</li>
                        <li>Tu</li>
                        <li>We</li>
                        <li>Th</li>
                        <li>Fr</li>
                        <li>Sa</li>
                        <li>Su</li>
                    </ul>
                    <ul class="days">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li><span class="active">10</span></li>
                        <li>11</li>
                        <li>12</li>
                        <li>13</li>
                        <li>14</li>
                        <li>15</li>
                        <li>16</li>
                        <li>17</li>
                        <li>18</li>
                        <li>19</li>
                        <li>20</li>
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li>24</li>
                        <li>25</li>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                    </ul>
                </div>
            </form>
        </div>
    </div> --}}
@endsection
