let uploadForm = $('#form')[0];
let uploadZone = $('#upload');

if (window.File && window.FileReader && window.FileList && window.Blob) {
    $('#uploadzone').bind('dragenter', (e) => {
        e.preventDefault();
        e.stopPropagation();
        uploadZone.addClass('hilight');
    }).bind('dragleave', (e) => {
        e.preventDefault();
        e.stopPropagation();
        if(e.relatedTarget) {
            if (e.relatedTarget.id !== 'upload') {
                uploadZone.removeClass('hilight');
            }
        } else {
            uploadZone.removeClass('hilight');
        }
    }).bind("dragover", (e) => {
        e.preventDefault();
        e.stopPropagation();
    }).bind("drop", (e) => {
        e.preventDefault();
        e.stopPropagation();
        uploadZone.removeClass('highlight');
        console.log(e);
        uploadForm.firstElementChild.files = e.originalEvent.dataTransfer.files;
        uploadForm.submit();
    });
    $('#upload').bind('dragenter', (e) => {
        e.preventDefault();
        e.stopPropagation();
        uploadZone.addClass('hilight');
    }).bind('dragleave', (e) => {
        e.preventDefault();
        e.stopPropagation();
        if(e.relatedTarget) {
            if (e.relatedTarget.id !== 'uploadzone') {
                uploadZone.removeClass('hilight');
            }
        } else {
            uploadZone.removeClass('hilight');
        }
    }).bind("dragover", (e) => {
        e.preventDefault();
        e.stopPropagation();
    }).bind("drop", (e) => {
        e.preventDefault();
        e.stopPropagation();
        uploadZone.removeClass('highlight');
        console.log(e);
        uploadForm.firstElementChild.files = e.originalEvent.dataTransfer.files;
        uploadForm.submit();
    });
    uploadZone.on('click', (e) => {
        uploadForm.firstElementChild.click();
    });
}