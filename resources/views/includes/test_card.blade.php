
<div class="iconBox3">
    <center><h3 style="color: white">Test {{ $test->name }}</h3></center>
</div>
<div class="col-xl-12">
    <div class="col-md-8 col-sm-8 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;" >
        <div class="service_item_2">
            <h4>Description of the task</h4>
            <p>{{$test->description}}</p>
        </div>
    </div>

    <div class="col-md-4 col-sm-4 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>Time for passing</h4>
            <p>{{$test->time}} min</p>
        </div>
    </div>
</div>




