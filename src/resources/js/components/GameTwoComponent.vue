<template>
<transition>
<div class="vue_row">

<div class="sentence mt-5 mb-3 vue_sentence">
<p>質問2</p>
</div>


<div class="box B_5">
<div class="confirm">
<div class="text-center text-break">
<p>地球最後の日に食べるなら？</p>
</div>
</div>
</div>


<div>
<router-link v-bind:to="{name: 'game.tree'}">   
<button class="button cancel mt-5 mb-5 vue_cancel">おでん</button>
<button class="button mt-5 mb-5">きつねうどん</button>
</router-link>       
</div>

</div>
</transition>
</template>

<script>
    export default {}
</script>
