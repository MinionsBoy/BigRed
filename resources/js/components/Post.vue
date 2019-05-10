<template>
    <div class="iconBox3">
        <center><h3 style="color: white">{{post.title}}</h3></center>
    </div>

    <div class="col-xl-12 ">
        <div class="col-md-10 col-sm-10 elem aos-init aos-animate wow fadeInLeft" data-aos="zoom-in" style="visibility: visible;">
            <div class="service_item_2">
                <p>{{post.description}}</p>
            </div>
        </div>
        <!--<div class="col-sm-4 leftAlign xsAlignReset">-->
            <!--&lt;!&ndash;<a href="{{ route('posts.show',['id'=>$post->id])}}" class="button primary large">Details</a>&ndash;&gt;-->
        <!--</div>-->
    </div>
</template>

<script>
    export default {
        name: "Post",
        props: ['post']
    }
</script>

<style scoped>

</style>
