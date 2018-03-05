<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="message" v-for="status in statuses">
                    <div class="message-header">
                        <p><strong>{{status.user.name}}</strong> said...</p>
                        <p>{{status.created_at | ago }}</p>
                    </div>
                    <div class="message-body" v-text="status.body"></div>
                </article>

                <add-to-stream @completed="addStatus"></add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/status';
    import AddToStream from '../components/AddToStream';

    export default {
        components: {AddToStream},
        data() {
            return {
                statuses: []
            }
        },
        filters: {
            ago(date) {
                return moment(date).fromNow();

            }
        },

        created() {
            Status.all(statuses => this.statuses = statuses);
        },
         methods: {
            addStatus(status){
                this.statuses.unshift(status);
                window.scrollTo(0,0);
            }
         }
    }
</script>
