<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <router-link class="navbar-brand" to="/">App</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <router-link class="nav-item" tag="li" to="/" active-class="active">
                        <a class="nav-link">Home</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/posts" active-class="active">
                        <a class="nav-link">Post</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/post/add" active-class="active">
                        <a class="nav-link">Add</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/login" active-class="active">
                        <a class="nav-link">Login</a>
                    </router-link>
                    <li class="nav-item">
                        <a class="nav-link" href="api/logout">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>

        <router-view>

        </router-view>
    </div>
</template>

<script>

    export default {
        name: 'app',

    }
</script>