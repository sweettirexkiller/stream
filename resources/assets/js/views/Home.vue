<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="message" v-for="status in statuses">
                    <div class="message-header">
                        <p><strong>{{status.user.name}}</strong> said...</p>
                        <p>{{postedOn(status)}}</p>
                    </div>
                    <div class="message-body" v-text="status.body"></div>
                </article>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/status';

    export default {
        data(){
            return {
                statuses: []
            }
        },

        created() {
            Status.all(statuses => this.statuses = statuses);
        },
        methods: {
            postedOn(status){
                return moment(status.created_at).fromNow();
            }
        }
    }
</script>
