<template>
<div class="deleteEvent">
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                <div>


                    <router-link v-bind:to="{name: 'game.one'}">   
                     <div class="show">表示されています</div>
                        <button type="button" class="btn btn-success" onclick="clickBtn1()">1へ</button>


                    </router-link>
                        
                </div>
            </nav>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data: {
        active01: false

    }
}
</script>

<style module>
.hide {
display: none;
}
.show {
   display: block; 
}
</style>
