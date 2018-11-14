<template>
    <div class="container">
        <div class="card-deck">
            <div class="card" v-for="(post, index) in posts" :key="index">
                <div class="card-body">
                    <div class="card-title">{{ post.title }}</div>
                    <div class="card-subtitle mb-2 text-muted">par {{ post.user.firstname}}</div>
                </div>
                <div class="card-footer">
                    <router-link class="nav-item" :to="{name: 'show_post', params: { id: post.id}}" active-class="active">
                        <a class="nav-link">Voir la suite</a>
                    </router-link>

                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        name: "transaction",
        created() {
            axios.get('/api/posts').then(res => {
                this.posts = res.data;
            })
        },
        data() {
            return {
                posts: []
            }
        },
        computed: {

        },
        methods: {

        },
    }
</script>
