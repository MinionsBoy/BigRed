
<div class="iconBox3">
    <center><h3 style="color: white">Vacancy Information</h3></center>
</div>
<div class="col-xl-12">
    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;" >
        <div class="service_item_2">
            <h4>NAME</h4>
            <p>{{$vac->name}}</p>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>CATEGORY</h4>
            <p>{{$vac->category}}</p>
        </div>
    </div>
</div>

<div class="col-xl-12 ">
    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>SALARY</h4>
            <p>{{$vac->salary}}</p>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>EMPLOYMENT</h4>
            <p>{{$vac->employment_type}}</p>
        </div>
    </div>
</div>

<div class="col-xl-12 ">
    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>CITY</h4>
            <p>{{$vac->city}}</p>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>REQUIREMENTS</h4>
            <p>{{$vac->requirements}}</p>
        </div>
    </div>
</div>

<div class="col-xl-12 ">
    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>TASKS</h4>
            <p>{{$vac->tasks}}</p>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>CONDITIONS</h4>
            <p>{{$vac->conditions}}</p>
        </div>
    </div>
</div>

<div class="col-xl-12 ">
    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>PHONE</h4>
            <p>{{$vac->phone}}</p>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <h4>CONTACT PERSON</h4>
            <p>{{$vac->contact_person}}</p>
        </div>
    </div>
</div>
<div class="col-sm-4 leftAlign xsAlignReset">
    <a href="{{ route('test.create',['id'=>$vac->id]) }}" class="button primary large">Create test for this vacancy</a>
</div>
<div class="col-sm-4 leftAlign xsAlignReset">
    <a href="{{ route('test.show',['id'=>$vac->id]) }}" class="button primary large">Show tests for this vacancy</a>
</div>



