    <template>
        <div class="htmleditor">
            <div class="htmleditor-input">
                <h3>Header</h3>
                <p>Paragraph of text</p>
            </div>
            <div class="htmleditor-output">

            </div>
        </div>
    </template>

    <script>
        export default
        {
            data: () =>
            ({
                html: ''
            }),
        }
    </script>

    <style scoped src="../../../../public/css/default.min.css">
        .htmleditor
        {
            display: flex;
        }

        .htmleditor-input
        {
            border: 1px solid green;
        }

        .htmleditor-output
        {
            border: 1px solid yellow;
        }
    </style>
