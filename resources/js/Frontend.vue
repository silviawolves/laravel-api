<template>

    <div>
        <Navbar></Navbar>
    
        <div class="container">
            <h1>BoolPress: {{ message }}</h1>
            <h4>Lista post</h4> 

            <PostsList></PostsList>
        </div>
    </div>

</template>
    
<script>
import Navbar from './frontend/components/Navbar.vue';
import PostsList from './frontend/components/PostsList.vue';
    
export default {
    components: { Navbar, PostsList },
    data() {
        return {
            message: 'Benvenuto'
        };
    },
}
</script>