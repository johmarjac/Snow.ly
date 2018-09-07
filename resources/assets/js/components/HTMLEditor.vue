<template>
    <div class="htmleditor">
        <div class="htmleditor-input">
            <div class="htmleditor-toolbar">
                <i v-for="tool in toolbar" :class="tool.icon" @click="minput=(minput||'')+tool.html"></i>
            </div>
            <textarea rows="16" v-model="minput" :name="inputname"></textarea>
        </div>
        <div class="htmleditor-output" v-html="minput"></div>
    </div>
</template>

<script>
    export default
    {
        props: ['inputname', 'input'],

        watch:
        {
            input: function()
            {
                this.minput = this.input
            }
        },

        mounted()
        {
            this.minput = this.input
        },

        data: () =>
        ({
            minput: '',
            toolbar:
            {
                bold:
                {
                    icon: 'fas fa-fw fa-bold',
                    html: '<b></b>',
                },

                italic:
                {
                    icon: 'fas fa-fw fa-italic',
                    html: '<i></i>',
                },

                underline:
                {
                    icon: 'fas fa-fw fa-underline',
                    html: '<u></u>',
                },

                paragraph:
                {
                    icon: 'fas fa-fw fa-paragraph',
                    html: '<p></p>',
                },

                listo:
                {
                    icon: 'fas fa-fw fa-list-ol',
                    html: '<ol>\n</ol>',
                },

                listu:
                {
                    icon: 'fas fa-fw fa-list-ul',
                    html: '<ul>\n</ul>',
                },

                listitem:
                {
                    icon: 'fas fa-fw fa-ellipsis-v',
                    html: '<li></li>',
                },

                header:
                {
                    icon: 'fas fa-fw fa-heading',
                    html: '<h3></h3>',
                },

                subheader:
                {
                    icon: 'fas fa-fw fa-heading',
                    html: '<h4></h4>',
                },

                image:
                {
                    icon: 'far fa-fw fa-image',
                    html: '<img src=""/>',
                },

                label:
                {
                    icon: 'fas fa-fw fa-square',
                    html: '<span class="label"></span>',
                },

                note:
                {
                    icon: 'fas fa-fw fa-comment-dots',
                    html: '<div class="note">\n</div>',
                },

                highlight:
                {
                    icon: 'fas fa-fw fa-highlighter',
                    html: '<span class="highlighter"></span>',
                },

                codeblock:
                {
                    icon: 'fas fa-fw fa-code',
                    html: '<codeblock language="html">Code Here - Remember to escape it first!</codeblock>',
                }
            }
        }),
    }
</script>

<style scoped>
    @import url('https://use.fontawesome.com/releases/v5.2.0/css/all.css');

    .htmleditor
    {
        display: flex;
        background: rgb(233, 236, 239);
        border: 1px solid rgb(206, 212, 218);
        border-radius: 3px;
        padding: 4px;
        margin-bottom: 15px;
    }

    .htmleditor-toolbar
    {
        padding: 8px;
        background: linear-gradient( to bottom, rgb(250, 250, 255) 30%, rgb(240, 240, 255) 80% );
        border: 1px solid rgb(206, 212, 218);
    }

    .htmleditor-toolbar > i
    {
        color: rgb(186, 192, 198);
        cursor: pointer;
        padding: 4px;
    }

    .htmleditor-toolbar > i:hover
    {
        transition: 0.25s color linear;
        text-shadow: none;
        color: black;
    }

    .htmleditor-toolbar > i:not(:last-of-type)
    {
        margin-right: 8px;
    }

    .htmleditor-input
    {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        flex-shrink: 0;
        flex-basis: 40%;
        margin-right: 4px;
    }

    .htmleditor-input > textarea
    {
        height: 100%;
    }

    .htmleditor-output
    {
        background: rgb(255, 255, 255);
        border: 1px solid rgb(206, 212, 218);
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        flex-shrink: 0;
        flex-basis: 40%;
        padding: 4px;
        overflow: auto;
        white-space: normal;
    }
</style>

<style scoped src="../../../../public/css/default.min.css" />
