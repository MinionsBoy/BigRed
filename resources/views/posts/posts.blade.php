@extends('layouts.app')
@section('content')
@include('posts.config')
    <div style="height: 75px; background-color: rgba(70, 82, 98, 0.8);"></div>
    <section id="solution"
             style="background: url(http://commonpixel.com/themes/edgar/images/examples/bg_parallax_05.jpg) no-repeat 50% 50% / cover fixed;">
        <div class="container-fluid projects-fluid">
            <div class="row justify-content-center">
{{--<<<<<<< HEAD--}}
                <div class="col-sm-4 leftAlign xsAlignReset">
                    <a href="{{ route('posts.create')}}" class="button primary large">New post</a>
                </div>
                <div class="srbox">
                    <form action="search.php" method="get">
                        <div class="bk">
                            <input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="What are you looking for ?" tabindex="1">
                            <button type="button" class="textbox-clr" id="textbox-clr" onClick="lightbg_clr()"></button>
                            <button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button>
                            <div id="livesearch"></div>
                        </div>
                    </form>
                </div>
                <div class="container">
                    {{--<div class="input-group mb-3">--}}
                        {{--<input v-model="query" type="text" class="form-control" placeholder="Post name or description"--}}
                               {{--aria-label="Post name or description"--}}
                               {{--aria-describedby="basic-addon2">--}}
                        {{--<div class="input-group-append">--}}
                            {{--<button class="btn btn-primary" @click="searchPosts" @keyup.enter="searchPosts" type="button">--}}
                                {{--Search--}}
                            {{--</button>--}}
                            {{--<posts></posts>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<posts></posts>--}}

                {{--@foreach($posts as $post)--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="container">--}}
                            {{--@include('includes.post_card')--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
{{--=======--}}
{{-->>>>>>> parent of 18e19e2... Update--}}
                @foreach($posts as $post)
                    <div class="col-md-12">
                        <div class="container">
                            @include('includes.post_card')
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        </div>
{{--        <script async src="{{mix('/resources/js/app.js')}}"></script>--}}
        {{--<script>--}}
            {{--import {mapGetters} from 'vuex'--}}
            {{--// import posts from '../components/Posts'--}}

            {{--export default {--}}
                {{--name: "Searchbar",--}}
                {{--components: {--}}
                    {{--posts--}}
                {{--},--}}
                {{--data() {--}}
                    {{--return {--}}
                        {{--query: '',--}}
                    {{--}--}}
                {{--},--}}
                {{--watch: {--}}
                    {{--query: {--}}
                        {{--handler: _.debounce(function () {--}}
                            {{--this.searchPosts()--}}
                        {{--}, 100)--}}
                    {{--}--}}
                {{--},--}}
                {{--methods: {--}}
                    {{--searchPosts() {--}}
                        {{--this.$store.dispatch('SEARCH_POSTS', this.query)--}}
                    {{--}--}}
                {{--}--}}
            {{--}--}}
        {{--</script>--}}

        <script>
            function lightbg_clr() {
                $('#qu').val("");
                $('#textbox-clr').text("");
                $('#search-layer').css({"width":"auto","height":"auto"});
                $('#livesearch').css({"display":"none"});
                $("#qu").focus();
            };

            function fx(str)
            {
                var s1=document.getElementById("qu").value;
                var xmlhttp;
                if (str.length==0) {
                    document.getElementById("livesearch").innerHTML="";
                    document.getElementById("livesearch").style.border="0px";
                    document.getElementById("search-layer").style.width="auto";
                    document.getElementById("search-layer").style.height="auto";
                    document.getElementById("livesearch").style.display="block";
                    $('#textbox-clr').text("");
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                        document.getElementById("search-layer").style.width="100%";
                        document.getElementById("search-layer").style.height="100%";
                        document.getElementById("livesearch").style.display="block";
                        $('#textbox-clr').text("X");
                    }
                }
                xmlhttp.open("GET","call_ajax.blade.php?n="+s1,true);
                xmlhttp.send();
            }
        </script>

    </section>
@endsection

