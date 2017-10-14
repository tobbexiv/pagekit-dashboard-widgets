<template>

    <form class="pk-panel-teaser uk-form uk-form-stacked" v-if="editing">

        <div class="uk-form-row">
            <label class="uk-form-label">{{ 'Title' | trans }}</label>
            <div class="uk-form-controls">
                <input class="uk-width-1-1" type="text" v-model="widget.title">
            </div>
        </div>

        <div class="uk-form-row">
            <label class="uk-form-label">{{ 'Notes' | trans }}</label>
            <div class="uk-form-controls">
                <textarea class="uk-width-1-1" rows="6" v-model="widget.note"></textarea>
            </div>
        </div>

    </form>

    <div v-else>

        <h3>{{ widget.title }}</h3>
        <p>{{{ widget.note }}}</p>

    </div>

</template>

<script>

    module.exports = {

        type: {

            id: 'notes',
            label: 'Notes',
            defaults: {
                title: '',
                notes: ''
            }

        },

        replace: false,

        props: ['widget', 'editing']

    }

</script>