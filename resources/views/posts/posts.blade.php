@extends('layouts.app')
@section('content')
    <div style="height: 75px; background-color: rgba(70, 82, 98, 0.8);"></div>
    <section id="solution"
             style="background: url(http://commonpixel.com/themes/edgar/images/examples/bg_parallax_05.jpg) no-repeat 50% 50% / cover fixed;">
        <div class="container-fluid projects-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-4 leftAlign xsAlignReset">
                    <a href="{{ route('posts.create')}}" class="button primary large">New post</a>
                </div>
                <div class="container">
                    <div class="input-group mb-3">
                        <input v-model="query" type="text" class="form-control" placeholder="Post name or description"
                               aria-label="Post name or description"
                               aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" @click="searchPosts" @keyup.enter="searchPosts" type="button">
                                Search
                            </button>
                            <posts></posts>
                        </div>
                    </div>
                </div>
                <posts></posts>

                {{--@foreach($posts as $post)--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="container">--}}
                            {{--@include('includes.post_card')--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
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
        <script>
            import {mapGetters} from 'vuex'
            // import posts from '../components/Posts'

            export default {
                name: "Searchbar",
                components: {
                    posts
                },
                data() {
                    return {
                        query: '',
                    }
                },
                watch: {
                    query: {
                        handler: _.debounce(function () {
                            this.searchPosts()
                        }, 100)
                    }
                },
                methods: {
                    searchPosts() {
                        this.$store.dispatch('SEARCH_POSTS', this.query)
                    }
                }
            }
        </script>
    </section>
@endsection

