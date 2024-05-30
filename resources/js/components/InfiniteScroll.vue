<template>
    <div>
        <ul class="list-group">
            <li v-for="training in trainings" :key="training.id" class="list-group-item">{{ training.name }}</li>
        </ul>
        <div v-if="isLoading" class="text-center">Loading...</div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: ['initialTrainings', 'perPage'],
    data() {
        return {
            trainings: this.initialTrainings.data,
            page: this.initialTrainings.current_page,
            isLoading: false,
        };
    },
    created() {
        window.addEventListener('scroll', this.handleScroll);
    },
    destroyed() {
        window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {
        handleScroll() {
            if (
                window.innerHeight + window.scrollY >= document.body.offsetHeight &&
                !this.isLoading &&
                this.page < this.initialTrainings.last_page
            ) {
                this.loadMoreData();
            }
        },
        loadMoreData() {
            this.isLoading = true;
            this.page++;

            axios
                .get(`/trainings?page=${this.page}`)
                .then(response => {
                    const newTrainings = response.data.data;
                    this.trainings = [...this.trainings, ...newTrainings];
                    this.isLoading = false;
                })
                .catch(error => {
                    console.log(error);
                    this.isLoading = false;
                });
        },
    },
};
</script>
