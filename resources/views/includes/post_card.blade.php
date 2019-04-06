<div class="iconBox3">
    <center><h3 style="color: white">{{$post->title}}</h3></center>
</div>

<div class="col-xl-12 ">
    <div class="col-md-10 col-sm-10 elem aos-init aos-animate wow fadeInLeft animated" data-aos="zoom-in" style="visibility: visible;">
        <div class="service_item_2">
            <p>{{$post->description}}</p>
            <p style="text-align: right">{{date( 'M j, Y H:i', strtotime($post->created_at)) }}</p>
        </div>
    </div>
    <div class="col-sm-4 leftAlign xsAlignReset">
        <a href="{{ route('posts.show',['id'=>$post->id])}}" class="button primary large">Details</a>
    </div>
</div>


