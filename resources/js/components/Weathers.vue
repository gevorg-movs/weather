<template>
    <div>
        <ResultsTable :data="weathers"/>
    </div>
</template>

<script>
import ResultsTable from "./ResultsTable";

export default {
    data() {
        return {
            weathers: []
        }
    },
    mounted() {
        fetch('/api/getWeathers')
            .then(response => response.json())
            .then(data => this.weathers = data)
    },
    components: {
        ResultsTable
    }
}
</script>
