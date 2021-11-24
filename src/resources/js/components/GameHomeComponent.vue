<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                <div>



                    <router-link v-bind:to="{name: 'game.one'}">   
                        <button class="btn btn-success">1へ</button>
                    </router-link>






                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
