<script setup>
import usePortfolio from "../composables/portfolio";
import { onMounted } from "vue";

const { skills, getSkills } = usePortfolio();

onMounted(getSkills);
</script>
<template>
    <section class="bg-light-tail-100 dark:bg-dark-navy-500 py-24">
        <div class="container flex items-center justify-center">
            <div class="grid grid-cols-5 md:grid-flow-col space-x-2 md:space-x-20">

                    <div 
                    v-for="skill in skills" 
                    :key="skill.id" 
                    class="flex items-center justify-center">


                        <img :src="skill.image" class=" lg:h-20" :alt="skill.name" />
                    </div>

            </div>
        </div>
    </section>
</template>