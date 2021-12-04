<template>
<div class="vue_row">

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
<div><button class="button cancel mt-5 mb-5 vue_cancel">ごはん</button>
</div>
<div><button class="button mt-5 mb-5 ">パン</button>
</div>
</router-link>       
</div>

</div>
</template>

<script>
    export default {}
</script>

