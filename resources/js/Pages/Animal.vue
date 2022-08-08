<template>

    <h1 class="text-center" style="color:black">Animals</h1>
    
    <div class="row d-flex justify-content-center align-content-center line">
        <div class="asd card" v-for="animal in animals" :key="animal.id">
            <div class="column card-header bg-info text-center">
                <h4>{{ animal.species }}</h4>
            </div>
            <div class="card-body">
                <h6 class="text-center">My Animals</h6>
                <ul class="text-center">
                    <br>
                    <li v-for="detail in animal.details" :key="detail.id">
                        name: {{ detail.name }} 
                    </li>

                    <li v-for="detail in animal.details" :key="detail.id">
                        age: {{ detail.age }}   
                    </li>

                    <li v-for="detail in animal.details" :key="detail.id">
                        address: {{ detail.address }}   
                    </li><br><br>
                        
                </ul>
                <h6 class="text-center">Species</h6>
                <ul class="text-center">
                    <li class="instruction" v-bind="animal in animals" :key="animal.id">
                        {{ animal.species }}
                    </li>
                </ul>
            </div>
        </div>
    </div>



</template>

<script >
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout,
    props: {
        animals: Array
    }
}
</script>

<style scoped>
.card {
    width: 375px;
}
.instruction {
    list-style: none;
}
li {
    list-style: none;
    padding: 0;
    margin: 0;
}
ul {
    list-style: none;
    padding: 0;
    margin: 0;
}


h1 {
    color: white;
}
.asd {
    margin: 100px auto;
    background-color: rgba(255, 255, 255,0.6);
}
.line {
    margin: auto;
    width: 90%;
    /* border: 3px solid green; */
    padding: 10px;
}
hr {
    border-top: 20px dashed white;
}
</style>