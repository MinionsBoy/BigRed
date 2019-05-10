<template>
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
</template>

<script>
    export default {
        name: "Searchbar",
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

<style scoped>

</style>
