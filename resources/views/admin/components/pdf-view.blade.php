<div>
    <iframe src="{{ $url }}" width="100%" height="800px"></iframe>
</div>
{{-- <div style="margin-bottom:10px; display:flex; gap:10px; align-items:center;">
    <button type="button" id="prevPageBtn" class="btn btn-secondary">← Назад</button>
    <button type="button" id="nextPageBtn" class="btn btn-secondary">Далее →</button>
    <button type="button" id="zoomOutBtn" class="btn btn-secondary">−</button>
    <button type="button" id="zoomInBtn" class="btn btn-secondary">+</button>
    <span>Масштаб: <b id="zoomValue">100%</b></span>
    <button type="button" id="deletePageBtn" class="btn btn-danger">Удалить текущую страницу</button>

    <span>
        Страница: <b id="pageNum">1</b> / <b id="pageCount">0</b>
    </span>
</div>

<canvas id="pdf-canvas" style="border:1px solid #ccc;"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>

// const url = "{{ $url }}"; // путь к PDF
const url = "{{ route('pdf.proxy') }}?file={{ $file }}";
const file = "{{ $file }}";

let pdfDoc = null;
let pageNum = 1;
let scale = 1.5; // начальный масштаб
let canvas = document.getElementById('pdf-canvas');
let ctx = canvas.getContext('2d');

const pageNumEl = document.getElementById('pageNum');
const pageCountEl = document.getElementById('pageCount');
const zoomValueEl = document.getElementById('zoomValue');

pdfjsLib.getDocument(url).promise.then(pdf => {
    pdfDoc = pdf;
    pageCountEl.innerText = pdf.numPages;
    renderPage(pageNum);
});

function renderPage(num) {
    pdfDoc.getPage(num).then(page => {
        const viewport = page.getViewport({ scale: scale });
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        page.render({
            canvasContext: ctx,
            viewport: viewport
        });

        pageNumEl.innerText = num;
        zoomValueEl.innerText = Math.round(scale * 100) + '%';
    });
}

function safeClick(handler) {
    return function (e) {
        e.preventDefault();
        e.stopPropagation();
        handler();
    }
}

prevPageBtn.onclick = safeClick(() => {
    if (pageNum <= 1) return;
    pageNum--;
    renderPage(pageNum);
});

nextPageBtn.onclick = safeClick(() => {
    if (pageNum >= pdfDoc.numPages) return;
    pageNum++;
    renderPage(pageNum);
});

zoomInBtn.onclick = safeClick(() => {
    if (scale >= 3) return;
    scale += 0.25;
    renderPage(pageNum);
});

zoomOutBtn.onclick = safeClick(() => {
    if (scale <= 0.5) return;
    scale -= 0.25;
    renderPage(pageNum);
});


function deleteCurrentPage() {
    fetch("{{ route('pdf.removePage') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({
            page: pageNum,
            file: file
        })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            pdfjsLib.getDocument(url + '?t=' + Date.now()).promise.then(pdf => {
                pdfDoc = pdf;

                if (pageNum > pdfDoc.numPages) {
                    pageNum = pdfDoc.numPages;
                }

                renderPage(pageNum);
            });
        }
    });
}

deletePageBtn.onclick = safeClick(() => {
    deleteCurrentPage();
});
</script> --}}
