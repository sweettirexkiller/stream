<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="message is-link" v-for="status in statuses">
                    <div class="message-header">
                        <p>{{status.user.name}} said...</p>
                        <p>A moment ago</p>
                    </div>
                    <div class="message-body" v-text="status.body"></div>
                </article>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                statuses: []
            }
        },

        created() {
            axios.get('/statuses')
                .then(({data}) => this.statuses = data);
        }
    }
</script>
