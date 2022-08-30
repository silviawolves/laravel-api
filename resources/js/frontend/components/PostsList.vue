<template>
    <div>
        <div class="row row-cols-2">
            <div class="col" v-for="post in posts" :key="post.id">

                <div class="card mb-4">
                    <img v-if="post.cover_img" :src="post.cover_img" class="card-img-top">
        <img v-else src="/img/placeholder-image.png" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">{{ post.title }}</h5>
                        <p class="card-text" v-html="post.content"></p>
                        <a href="#" class="btn btn-primary">dettagli</a>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</template>
    
<script>
import axios from 'axios';

export default {
    data() {
        return {
            posts: [],
        };
    },
    methods: {
        fetchPosts() {
            axios.get('/api/posts')
            .then((resp) => {
                this.posts = resp.data;
            });
        },
    },
    mounted() {
        this.fetchPosts();
    },
}
</script>

<style>
.card-img-top {
    aspect-ratio: 16/9;
    object-fit: cover;
}
</style>