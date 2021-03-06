<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4 alert alert-danger" role="alert" v-if="error">
                    {{ error }}
                </div>
                <label for="autocomplete" class="form-label">City</label>
                <form @submit.prevent="getResult" class="mb-5">
                    <div class="d-flex">
                        <input type="text" class="form-control" id="autocomplete" ref="cityInput">
                    </div>
                    <button class="btn btn-primary mt-2" type="submit" :disabled="loading">
                        <span v-if="loading" class="spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                        Get weather in your city
                    </button>
                </form>
            </div>
        </div>
        <ResultsTable :data="data" v-if="data"/>
    </div>
</template>

<script>
import ResultsTable from "./ResultsTable";

export default {
    components: {ResultsTable},
    data() {
        return {
            loading: false,
            data: null,
            error: null
        }
    },
    methods: {
        async getResult() {
            this.loading = true
            let city = this.$refs.cityInput.value;
            if (city.includes(',')) {
                city = city.split(',')[0]
            }
            let response = await fetch(`/api/getWeatherInCity?city=${city}`);
            let weatherInfo = await response.json()
            if (response.ok) {
                this.error = null
                this.data = [weatherInfo]
            } else {
                this.error = weatherInfo.message
            }
            this.loading = false
        },
    },
    mounted() {
        new google.maps.places.Autocomplete(this.$refs.cityInput);
    }
}
</script>
