<template>
<div class="vue_row">

<div class="sentence mt-5 mb-3 vue_sentence">
<p>質問3</p>
</div>


<div class="box B_5">
<div class="confirm">
<div class="text-center text-break">
<p>なりたくないのは？</p>
</div>
</div>
</div>


<div>
<router-link v-bind:to="{name: 'game.four'}"> 
<div>
<button class="button cancel mt-5 mb-5 vue_cancel">頭痛</button>
</div> 
<div>
<button class="button mt-5 mb-5 ">腹痛</button>
</div> 
</router-link>       
</div>

</div>
</template>

<script>
    export default {}
</script>