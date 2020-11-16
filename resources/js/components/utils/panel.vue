<template>
    <div :class="selectedBackground" class="rounded px-8 py-6">
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
