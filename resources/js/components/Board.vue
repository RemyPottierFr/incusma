<template>
    <div class="flex">
        {{ test }}
    </div>
</template>

<script>
export default {
    name: "Board",
    props : {
        test: String,
    },
    data() {
        return ({
            text: "hello"
        })
    }
}
</script>

<style scoped>

</style>
