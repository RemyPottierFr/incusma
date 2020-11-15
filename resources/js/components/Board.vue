<template>
    <div class="flex flex-col">
        <div class="flex flex-no-wrap item-center relative border-b-4 border-light">
            <input type="checkbox" v-if="withCheck" class="btn-primary check-primary w-4 h-4 mr-4"/>
            <div class="w-1/2 flex items-center text-xl"><span>Nom</span></div>
            <div class="w-1/4 flex items-center justify-center text-xl"><span>Missions</span></div>
            <div class="w-1/4 flex items-center justify-center text-xl"><span>Montant</span></div>
        </div>
        <div class="flex flex-no-wrap item-center relative my-2" v-for="user in users">
            <input type="checkbox" v-if="withCheck" class="btn-primary check-primary w-4 h-4 mr-4"/>
            <div class="w-1/2 flex items-center"><span>{{ user.name }}</span></div>
            <div class="w-1/4 flex items-center justify-center"><span>{{ user.missions.length }}</span></div>
            <div class="w-1/4 flex items-center justify-center">
                <span>{{ user.missions.reduce((acc, val) => acc += val.amount, 0) }}</span></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Board",
    props: {
        withCheck: {
            type: Boolean,
            default: true
        },
        users: {
            type: Array,
            default: () => {
                let result = [];
                for (let i = 0; i < 10; i++) {
                    result = [...result, {
                        name: "Test",
                        missions: [
                            {amount: 1000},
                            {amount: 1000},
                            {amount: 1000},
                            {amount: 1000},
                        ]
                    }];
                }
                return result
            }
        },
        data() {
            return ({
                text: "hello"
            })
        }
        ,
        computed: {
            reverseText() {
                return this.text.split("").reverse().join("");
            }
        }
    }
}
</script>

<style scoped>

</style>
