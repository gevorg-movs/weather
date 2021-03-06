<template>
    <div class="container">
        <Navbar class="mb-5"/>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from './Navbar'

export default {
    components: {
        Navbar
    }
}
</script>
