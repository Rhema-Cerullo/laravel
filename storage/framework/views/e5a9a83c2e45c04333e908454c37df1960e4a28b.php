<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/css/')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/schedule.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Which Tasks You Want To Schedule</h2>
        <div class="col-10">
            <form class="form-inline" action="">
                
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


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project\comfival\resources\views/scheduleTask.blade.php ENDPATH**/ ?>