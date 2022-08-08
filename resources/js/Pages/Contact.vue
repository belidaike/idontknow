<template>
    <h1 class="text-center" style="color:black">Contact Us</h1>
    <br>
    <div class="d-flex justify-content-center">
    
        <div class="asdf">
            <p class="text-center"><strong>Golis Animals Co.</strong><br>
            #452 Beverly Hills, del Cinco City <br>
            Telefax: 890-117-227 <br>
            Mobile: +63 980-883-5299</p>
        </div>
    </div>
</template>



<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout
}
</script>

<style>
h1, p{
    color: white;
}
p {
    font-size: 30px;
}
.asdf {
    background-color: rgba(255, 255, 255, 0.4);
;
}
.asdf p {
    color: black;
}
</style>