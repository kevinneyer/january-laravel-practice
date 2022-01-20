<template>
    <div v-if="!loading">
        All Posts
        <div v-for="post in posts" :key="post.id">
            {{ post.title }}
            {{ post.body }}
        </div>
    </div>
</template>

<script>
export default {
    props: ["posts"],
    data() {
        return {
            loading: true
        }
    },
    mounted() {
        this.loading = false;
    }
}
</script>
