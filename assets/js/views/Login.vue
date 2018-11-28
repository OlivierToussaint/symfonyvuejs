<template>
    <div>
    <form>
        <div class="card">
            <div class="card-header">
                <h3>Title</h3>
            </div>
            <div class="alert alert-danger m-2" v-if="message">
                {{ message }}
            </div>
            <div class="card-body">
                <div class="form-group input-group">
                    <input class="form-control" type="email" placeholder="login" required v-model="username">

                </div>
                <div class="form-group input-group">
                    <input class="form-control" type="password" placeholder="password" required v-model="password">

                </div>

                <div class="text-center text-sm-right">
                    <span class="btn btn-primary" @click="login" >
                        <i class="fas fa-sign-in-alt"></i>
                        Sign it
                    </span>
                </div>
            </div>
        </div>
    </form>
    </div>
</template>


<script>

    export default {
        name: 'addPost',
        data() {
            return {
                message : '',
                username : '',
                password : ''
            }
        },
        methods: {
            login() {
                axios.post('/api/login', {
                    username: this.username,
                    password: this.password,

                }).then(res => {


                }).catch(error => {
                    this.message = error.response.data.error;

                })
            },
        }
    }
</script>