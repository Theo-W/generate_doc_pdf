ClassicEditor
    .create(
        document.querySelector('#content'), {
            toolbar: ['heading',
                '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'imageUpload',
                'blockQuote', 'insertTable', 'codeBlock', 'mediaEmbed',
                'undo', 'redo'
            ]
        })

    .then(editor => {
        console.debug('Editor was initialized', editor);
        window.editor = editor;
    })
    .catch(error => {
        console.error(error.stack);
    })
;

console.debug('ckeditor.js loaded');
