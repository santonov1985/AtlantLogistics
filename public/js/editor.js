var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],

    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    [{ 'direction': 'rtl' }],                         // text direction

    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    [{ 'align': [] }],

    ['clean'],                                         // remove formatting button

    ['image'],

    ['link'],

    [{ list: "ordered" }, { list: "bullet" }],
];
Quill.register("modules/htmlEditButton", htmlEditButton);

var quill = new Quill('#texteditor', {
    modules: {
        toolbar: {
            container: toolbarOptions
        },
        htmlEditButton: {
            debug: true,
            syntax: true
        }
    },
    theme: 'snow'
});

let form = document.querySelector('form');

form.onsubmit = function() {
    let input = document.querySelector('input[class=quill]');
    input.value = $('div.ql-editor').html();
};
