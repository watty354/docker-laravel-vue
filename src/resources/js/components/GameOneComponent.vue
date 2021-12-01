<template>
<transition>
<div class="row vue_row">

<div class="sentence mt-5 mb-3 vue_sentence">
<p>質問1</p>
</div>


<div class="box B_5">
<div class="confirm">
<div class="text-center text-break">
<p>朝食はごはん派？パン派？</p>
</div>
</div>
</div>


<div>
<router-link v-bind:to="{name: 'game.two'}">   
<button class="button cancel mt-5 mb-5 vue_cancel">ごはん</button>
<button class="button mt-5 mb-5 ">パン</button>
</router-link>       
</div>

</div>
</transition>
</template>

<script>
    export default {}
</script>


<style scoped>
.v-enter-active, .v-leave-active {
  transition: opacity .5s
}

.v-enter, .v-leave-to {
  opacity: 0
}
</style>