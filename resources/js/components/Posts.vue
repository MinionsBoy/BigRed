<template>
    <div class="container">
        <div class="row" v-for="post in groupedPosts">
            <post class="animated fadeIn" :post="post"></post>
            <div class="col w-100"></div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import post from '../components/Post'

    export default {
        name: "Posts",
        components: {
            post
        },
        mounted() {
            this.$store.dispatch('GET_POSTS')

            window.Echo.channel('search')
                .listen('.searchResults', (e) => {
                    this.$store.commit('SET_POSTS', e.posts)
                })

        },
        computed: {
            groupedPosts() {
                return _.chunk(this.posts, 4);
            },
            ...mapGetters([
                'posts'
            ])
        }
    }
</script>
