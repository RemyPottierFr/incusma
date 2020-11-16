<template>
    <div class="rounded px-8 py-6" :class="selectedBackground">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "panel",
    props: {
        color: {
            type: String,
            default: "light"
        },
        class: {
            type: String,
            default: ""
        }
    },
    computed: {
        selectedBackground() {
            return 'bg-' + this.color + ' ' + this.class;
        }
    }
}
</script>
