require('./bootstrap');
const html2pdf = require('html2pdf.js')
const hljs = require("highlight.js");

hljs.initHighlightingOnLoad();


function Generatepdf() {
    const content = document.querySelector('#element')

    const opt = {
        margin:       3,
        pagebreak: { mode: ['avoid-all', 'css', 'legacy'] },
        html2canvas:  { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait', precision: '16', floatPrecision: '16' }
    }

    html2pdf().set(opt).from(content).save()
}

document.querySelector('#onClickGeneratePDF').addEventListener('click', function (e) {
    e.preventDefault()
    Generatepdf()
})

