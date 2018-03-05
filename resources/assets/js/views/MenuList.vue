<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="message is-success">
                    <div class="message-body">
                        <strong>Scoped slots</strong>
                        <ul>
                            <li v-for="item in items" v-text="item">
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['items']
    }
</script>
