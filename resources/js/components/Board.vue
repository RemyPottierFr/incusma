<template>
    <div class="flex flex-col">
<!--        <popup></popup>-->
        <div class="flex flex-no-wrap item-center relative border-b-4 border-light">
            <div class="flex items-center">
                <input type="checkbox" v-if="withCheck" @click="selectAllItems"
                       class="btn-primary check-primary w-4 h-4 mr-4"/>
            </div>
            <div v-if="customerSelected" class="w-1/2">
                <button @click="deleteConfirmation" class="btn-primary"><i class="fas fa-trash"></i></button>
            </div>
            <div class="w-1/2 flex items-center text-light text-xl" v-else><span>Nom</span></div>
            <div class="w-1/4 flex items-center text-light justify-center text-xl"><span>Missions</span></div>
            <div class="w-1/4 flex items-center text-light justify-center text-xl"><span>Montant total</span></div>
        </div>
        <div class="flex flex-no-wrap item-center relative my-2" v-for="customer in customers">
            <input type="checkbox" v-if="withCheck" v-bind:checked="customer.check"
                   @click="updateCustomerCheck(customer.id)"
                   class="btn-primary check-primary w-4 h-4 mr-4"/>
            <div class="w-1/2 flex items-center text-primary"><a v-bind:href="findCustomerRoute(customer.id)">{{ customer.name }}</a>
            </div>
            <div class="w-1/4 flex items-center justify-center text-secondary"><span>{{ customer.missions.length }}</span></div>
                        <div class="w-1/4 flex items-center justify-center text-primary">
                            <span>{{ customer.missions.reduce((acc, val) => acc += +val.amount, 0) }} €</span></div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Popup from "./utils/popup";

export default {
    name: "Board",
    components: {Popup},
    props: {
        withCheck: {
            type: Boolean,
            default: true
        },
        route: String,
    },
    data() {
        return ({
            customers: [],
        })
    },
    mounted() {
        axios.get('/api/customers')
            .then(res => {
                this.customers = res.data.map(x => {
                    x.check = false;
                    return x
                });
            }).catch(err => {
            console.log(err)
        })
    },
    methods: {
        findCustomerRoute: function (customerId) {
            return `${this.route}/${customerId}`
        },
        selectAllItems(event) {
            this.customers = this.customers.map(customer => {
                customer.check = event.target.checked;
                return customer;
            })
        },
        updateCustomerCheck(customerId) {
            this.customers = this.customers.map(customer => {
                customer.id === customerId && (customer.check = !customer.check)
                return customer;
            })
        },
        deleteConfirmation() {

        }
    },
    computed: {
        customerSelected() {
            return this.customers.some((customer) => customer.check)
        }
    }
}

</script>
