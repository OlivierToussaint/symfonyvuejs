<template>
    <div class="container">
        <h2>{{post.title}} le {{post.updateAt}} </h2>
        <div>
            {{post.content}}
        </div>
    </div>
</template>

<script>
    import Post from '../components/Post.vue';
    export default {
        name: 'Posts',
        data() {
            return {
                id : null,
                post : null
            }
        },
        created() {
            this.id = this.$route.params.id;
            axios.get('/api/post/get/'+this.id).then(res => {
                this.post = res.data;
            })
        }
    }
</script>