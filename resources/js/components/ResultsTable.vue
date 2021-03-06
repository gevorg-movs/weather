<template>
    <table class="table text-center">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Temperature</th>
            <th scope="col">Sunrise</th>
            <th scope="col">Sunset</th>
            <th scope="col">Description</th>
            <th scope="col">Wind Speed</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in data" :key="item.id">
            <td>{{ item.name }}</td>
            <td>{{ item.country }}</td>
            <td>{{ item.temperature }} °C</td>
            <td>{{ item.sunrise | filterDate }}</td>
            <td>{{ item.sunset | filterDate }}</td>
            <td>{{ item.description }}</td>
            <td>{{ item.wind }} m/s</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: ['data'],
    filters: {
        filterDate(value) {
            value = new Date(value * 1000)
            let hours = value.getHours() < 10 ? '0' + value.getHours() : value.getHours(),
                minutes = value.getMinutes() < 10 ? '0' + value.getMinutes() : value.getMinutes()
            return hours + ':' + minutes
        },
    }
}
</script>
