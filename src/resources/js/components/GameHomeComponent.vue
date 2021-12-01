<template>
        <div class="row fadein vue_home">


                <div class="mt-5 mb-5 wrapper">
                        <h1 data-heading="偽性格診断">偽性格診断</h1>
                </div>
                <div>
                    <router-link v-bind:to="{name: 'game.one'}">   
                        <button type="button" class="button" onclick="clickBtn1()">スタート</button>
                    </router-link>   
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
