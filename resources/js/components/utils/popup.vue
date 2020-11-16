<template>
    <div class="w-screen h-screen bg-black bg-opacity-75 absolute left-0 top-0 z-50">
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-default rounded px-8 py-4">
            <button class="absolute right-4 top-4"><i class="fas fa-times"></i></button>
        </div>
    </div>
</template>

<script>
export default {
    name: "popup",
    props: ['onSubmit', 'onReject', 'onClose'],
}
</script>
